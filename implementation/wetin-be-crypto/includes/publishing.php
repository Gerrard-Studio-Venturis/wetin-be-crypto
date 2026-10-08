<?php
if (!defined('ABSPATH')) { exit; }
/** Explicit, repeatable site setup. Does not replace unrelated site content. */
final class WBC_Publishing {
    public static function boot() {
        add_action('admin_menu', function () { add_management_page('Wetin Be Crypto setup', 'Wetin Be Crypto', 'manage_options', 'wbc-setup', [self::class,'screen']); });
        add_action('admin_post_wbc_publish', [self::class,'submit']);
    }
    public static function screen() {
        if (!current_user_can('manage_options')) { return; }
        echo '<div class="wrap"><h1>Wetin Be Crypto site setup</h1><p>Import public lessons, articles, topic pages and glossary. Existing unrelated content is preserved. Practice remains on hold until its versioned definitions are approved. Take a site backup first.</p><p>This publishes the supplied teaching drafts; independent expert and learner reviews are not recorded. The news article is dated 7 October 2026 and needs a freshness check.</p><form method="post" action="'.esc_url(admin_url('admin-post.php')).'">';
        wp_nonce_field('wbc_publish');
        echo '<input type="hidden" name="action" value="wbc_publish"><label><input type="checkbox" name="homepage" value="1"> Set the new Welcome page as the homepage</label><p><label><input type="checkbox" name="accounts" value="1" checked> Enable optional subscriber registration with WordPress email password setup</label></p>';
        submit_button('Publish education content'); echo '</form></div>';
    }
    public static function submit() {
        if (!current_user_can('manage_options')) { wp_die('Administrator access required.',403); }
        check_admin_referer('wbc_publish');
        $result=self::publish(!empty($_POST['homepage']));
        if (!is_wp_error($result) && !empty($_POST['accounts'])) { update_option('default_role','subscriber'); update_option('users_can_register',1); }
        if (is_wp_error($result)) { wp_die(esc_html($result->get_error_message())); }
        wp_safe_redirect(admin_url('tools.php?page=wbc-setup')); exit;
    }
    private static function navigation() {
        $links=[];
        foreach (['learn'=>'Learn','practice'=>'Practice','journey'=>'My journey','articles'=>'Articles','topics'=>'Topics','glossary'=>'Glossary','saved'=>'Saved articles'] as $slug=>$label) { $links[]='<a href="'.esc_url(home_url('/'.$slug.'/')).'">'.esc_html($label).'</a>'; }
        return '<nav aria-label="Learning navigation" style="display:flex;flex-wrap:wrap;gap:1rem;margin-bottom:2rem">'.implode(' ', $links).'</nav>';
    }
    private static function blocks($html) { return "<!-- wp:html -->\n".$html."\n<!-- /wp:html -->"; }
    public static function slug($id) { return strtolower(str_replace('.','-', $id)); }
    private static function write($id,$title,$content,$type='page') {
        $existing=get_posts(['post_type'=>$type,'post_status'=>'any','numberposts'=>1,'meta_key'=>'_wbc_content_id','meta_value'=>$id]);
        $content=self::blocks(self::navigation()).$content;
        $post=['post_type'=>$type,'post_title'=>$title,'post_content'=>$content,'post_status'=>'publish','post_name'=>self::slug($id)];
        if ($existing) { $post['ID']=$existing[0]->ID; }
        $pid=wp_insert_post(wp_slash($post),true);
        if (!is_wp_error($pid)) { update_post_meta($pid,'_wbc_content_id',$id); update_post_meta($pid,'_wbc_revision','1'); }
        return $pid;
    }
    public static function publish($homepage=false) {
        $data=json_decode(file_get_contents(dirname(__DIR__).'/data/public-content.json'),true);
        if (!is_array($data) || count($data['lessons']??[])!==32) { return new WP_Error('manifest','Content manifest is missing or invalid.'); }
        // Refuse reserved-route collisions before writing any content. Never replace
        // another owner's page or silently link to a different Learn page.
        foreach (['learn','practice','journey','articles','saved','topics','glossary','welcome'] as $slug) {
            $existing=get_page_by_path($slug,OBJECT,'page');
            if ($existing && get_post_meta($existing->ID,'_wbc_content_id',true)!=='site-'.$slug) {
                return new WP_Error('route_collision','An existing page occupies /'.$slug.'/. No content was imported. Reconcile that page in WordPress before setup; do not delete unrelated content.');
            }
        }
        $map=[];
        foreach (['lessons','articles','hubs','glossary'] as $kind) {
            foreach ($data[$kind] as $item) {
                $html=$item['body_html'];
                if ($kind==='lessons') { $html.='<p><a href="'.esc_url(home_url('/learn/?lesson='.rawurlencode($item['id']))).'">Open in the guided learning journey</a></p>'; }
                if (!empty($item['as_of'])) { $html='<p><strong>Research news · as of '.esc_html($item['as_of']).'</strong></p>'.$html; }
                if ($item['id']==='A-STORY-01') { $html='<p><strong>Fictional teaching story</strong></p>'.$html; }
                $pid=self::write($item['id'],$item['title'],self::blocks($html),$kind==='articles'?'post':'page');
                if (is_wp_error($pid)) { return $pid; }
                $map[$item['id']]=$pid;
            }
        }
        $topics='<h2>Explore a topic</h2><ul>';
        foreach ($data['hubs'] as $item) { $topics.='<li><a href="'.esc_url(get_permalink($map[$item['id']])).'">'.esc_html($item['title']).'</a></li>'; }
        $topics.='</ul>';
        $glossary='<h2>Crypto, in plain English</h2>';
        foreach ($data['glossary'] as $item) { $glossary.='<section id="'.esc_attr(self::slug($item['id'])).'"><h3>'.esc_html($item['title']).'</h3>'.$item['body_html'].'</section>'; }
        $home='<p><strong>Crypto learning for everyday life</strong></p><h1>Understand the idea. Know the risks. Find your own pace.</h1><p>Build your understanding through eight guided modules, clear examples and fictional practice. No wallet or funds needed. Small small, the pieces start to connect.</p><p><a href="'.esc_url(home_url('/learn/')).'">Start learning</a> · <a href="'.esc_url(home_url('/articles/')).'">Read articles and stories</a></p><h2>Your learning route</h2><p>Start with the basics, spot scams, understand custody, check networks, compare stablecoins and costs, inspect transactions, verify receipts, and review permissions.</p><p>Core lessons are free. An optional account saves your journey across devices. Reading progress and demonstrated practice are shown separately.</p><h2>Explore</h2><p><a href="'.esc_url(home_url('/topics/')).'">Topics and coin explainers</a> · <a href="'.esc_url(home_url('/glossary/')).'">Glossary</a> · <a href="'.esc_url(home_url('/journey/')).'">My journey</a></p>';
        $pages=[
            'learn'=>['Learn','[wbc_app view="learn"]'],
            'practice'=>['Practice','[wbc_app view="practice"]'],
            'journey'=>['My journey','[wbc_app view="journey"]'],
            'articles'=>['Articles and stories','[wbc_app view="articles"]'],
            'saved'=>['Saved articles','[wbc_app view="saved"]'],
            'topics'=>['Topics',self::blocks($topics)],
            'glossary'=>['Glossary',self::blocks($glossary)],
            'welcome'=>['Wetin Be Crypto',self::blocks($home)],
            'about'=>['About',self::blocks('<h2>Learn before you act</h2><p>Wetin Be Crypto explains crypto for a wider African audience, with a West African focus. Clear English carries the teaching; occasional Nigerian Pidgin adds familiarity.</p><p>Examples and practice routes are fictional. Content teaches understanding and risk assessment, rather than promising returns or recommending investments. Reading completion records reading; practice checks only their stated decisions.</p>')],
        ];
        foreach ($pages as $slug=>$page) {
            // Stable site IDs differ from public canonical teaching identities.
            $pid=self::write('site-'.$slug,$page[0],$page[1]);
            if (is_wp_error($pid)) { return $pid; }
            wp_update_post(['ID'=>$pid,'post_name'=>$slug]);
            $map['site-'.$slug]=$pid;
        }
        update_option('wbc_published_map',$map,false);
        if ($homepage) { update_option('show_on_front','page'); update_option('page_on_front',$map['site-welcome']); }
        flush_rewrite_rules(false);
        return $map;
    }
}
WBC_Publishing::boot();
