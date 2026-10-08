<?php
if (!defined('ABSPATH')) { exit; }
/** The field-guide presentation is scoped to our canonical content only. */
final class WBC_Site {
    const VERSION='0.2.0';
    public static function boot() {
        add_filter('template_include',[self::class,'template'],99);
        add_action('wp_enqueue_scripts',[self::class,'assets']);
        add_shortcode('wbc_home',[self::class,'home']);
    }
    public static function owned() {
        return is_singular() && (bool)get_post_meta(get_queried_object_id(),'_wbc_content_id',true);
    }
    public static function template($template) {
        return self::owned() ? dirname(__DIR__).'/templates/field-guide.php' : $template;
    }
    public static function assets() {
        if (!self::owned()) { return; }
        $base=plugins_url('assets/',dirname(__DIR__).'/wetin-be-crypto.php');
        wp_enqueue_style('dashicons');
        wp_enqueue_style('wbc-field-guide',$base.'site.css',[],self::VERSION);
        wp_enqueue_style('wbc-app',$base.'app.css',['wbc-field-guide'],self::VERSION);
        wp_enqueue_script('wbc-site',$base.'site.js',[],self::VERSION,true);
    }
    public static function url($slug) { return home_url('/'.$slug.'/'); }
    public static function image($name) { return plugins_url('assets/images/'.$name,dirname(__DIR__).'/wetin-be-crypto.php'); }
    public static function arrow() { return '<span class="dashicons dashicons-arrow-right-alt2" aria-hidden="true"></span>'; }
    public static function header() {
        $canonical=get_post_meta(get_queried_object_id(),'_wbc_content_id',true);
        echo '<a class="wbc-skip" href="#main-content">Skip to content</a><header class="wbc-header"><div class="wbc-container wbc-header-inner"><a class="wbc-wordmark" href="'.esc_url(home_url('/')).'" aria-label="Wetin Be Crypto home">wetin be crypto</a><button class="wbc-menu-button" type="button" aria-expanded="false" aria-controls="wbc-main-nav">Menu</button><nav id="wbc-main-nav" class="wbc-nav" aria-label="Main navigation">';
        foreach(['learn'=>'Learn','articles'=>'Articles','topics'=>'Topics','glossary'=>'Glossary','journey'=>'My journey'] as $slug=>$label) {
            $current=$canonical==='site-'.$slug;
            echo '<a '.($current?'aria-current="page" ':'').'href="'.esc_url(self::url($slug)).'">'.esc_html($label).'</a>';
        }
        echo '</nav><div class="wbc-header-actions"><a class="wbc-search-link" href="'.esc_url(self::url('learn').'?search=').'" aria-label="Search the field guide"><span class="dashicons dashicons-search" aria-hidden="true"></span></a><a class="wbc-signin" href="'.esc_url(is_user_logged_in()?self::url('journey'):wp_login_url(self::url('journey'))).'">'.(is_user_logged_in()?'My account':'Sign in').'</a></div></div></header>';
    }
    public static function footer() {
        echo '<footer class="wbc-footer"><div class="wbc-container wbc-footer-inner"><div><a class="wbc-wordmark" href="'.esc_url(home_url('/')).'">wetin be crypto</a><p>Clear ideas. Better questions.</p></div><nav aria-label="Footer navigation">';
        foreach(['learn'=>'Learn','articles'=>'Articles','glossary'=>'Glossary','saved'=>'Saved articles'] as $slug=>$label) { echo '<a href="'.esc_url(self::url($slug)).'">'.esc_html($label).'</a>'; }
        $privacy=get_privacy_policy_url();if($privacy){echo '<a href="'.esc_url($privacy).'">Privacy</a>';}
        echo '</nav><p class="wbc-footer-note">Education for everyday decisions.<br>Fictional practice. No wallet or funds needed.</p></div></footer>';
    }
    private static function item($id) {
        $map=get_option('wbc_published_map',[]);$pid=$map[$id]??0;
        return $pid && get_post_status($pid)==='publish' ? get_post($pid) : null;
    }
    public static function home() {
        $story=self::item('A-STORY-01');$storyurl=$story?get_permalink($story):self::url('articles');
        ob_start(); ?>
        <section class="wbc-hero wbc-container">
            <div class="wbc-hero-copy"><p class="wbc-eyebrow">The crypto field guide</p><h1>Understand<br>crypto. Ask<br><span class="wbc-highlight">better questions.</span></h1><p class="wbc-hero-description">Clear lessons, everyday examples and practical checks—at your own pace.</p><div class="wbc-hero-actions"><a class="wbc-primary" href="<?php echo esc_url(self::url('learn')); ?>">Start the foundation <?php echo self::arrow(); ?></a><a class="wbc-outline" href="<?php echo esc_url(self::url('articles')); ?>">Browse the field guide</a></div></div>
            <div class="wbc-hero-art"><img src="<?php echo esc_url(self::image('field-guide-book.webp')); ?>" alt="An illustrated open field guide connecting an asset, a network and a service." width="1100" height="550" fetchpriority="high" decoding="async"></div>
        </section>
        <section class="wbc-feature-grid wbc-container" aria-label="Featured reading and learning route">
            <div class="wbc-story"><p class="wbc-eyebrow">Featured story · fictional example</p><div class="wbc-story-layout"><div><h2>A screenshot needs<br>one more question.</h2><p>A fictional payment looks complete on screen. Follow the clues to distinguish a network record, a service balance and the recipient’s own receipt.</p><a class="wbc-text-link" href="<?php echo esc_url($storyurl); ?>">Read the full story <?php echo self::arrow(); ?></a></div><img src="<?php echo esc_url(self::image('fictional-story.webp')); ?>" alt="A fictional phone receipt and a magnifying glass invite a closer look at the evidence." width="640" height="480" loading="lazy" decoding="async"></div></div>
            <aside class="wbc-route"><p class="wbc-eyebrow">Start with the basics</p><h2>Your learning route</h2><ol>
                <li><a href="<?php echo esc_url(self::url('learn').'?lesson=L-01.1'); ?>"><strong>Understand the basics</strong><span>Separate the asset, network, wallet and service.</span></a></li>
                <li><a href="<?php echo esc_url(self::url('learn').'?lesson=L-02.1'); ?>"><strong>Spot the risks</strong><span>Recognise pressure, promises and missing evidence.</span></a></li>
                <li><a href="<?php echo esc_url(self::url('learn').'?lesson=L-03.1'); ?>"><strong>Know who has control</strong><span>Understand custody, recovery and your responsibilities.</span></a></li>
            </ol><a class="wbc-text-link" href="<?php echo esc_url(self::url('learn')); ?>">See all 8 modules (32 lessons) <?php echo self::arrow(); ?></a></aside>
        </section>
        <section class="wbc-note wbc-container"><img src="<?php echo esc_url(self::image('learner-portrait.webp')); ?>" alt="" width="240" height="300" loading="lazy"><p class="wbc-pidgin">Make we<br>break am down.</p><p>New words. New ideas. We explain things step by step, with familiar examples, so you can understand the choices and ask useful questions.</p></section>
        <section class="wbc-reading wbc-container"><div class="wbc-section-heading"><div><p class="wbc-eyebrow">Keep exploring</p><h2>Useful ideas for everyday life.</h2></div><a class="wbc-text-link" href="<?php echo esc_url(self::url('articles')); ?>">All articles <?php echo self::arrow(); ?></a></div><div class="wbc-reading-grid">
        <?php foreach(['A-EX-01'=>'Stablecoins','A-EX-02'=>'Wallets & custody','A-EX-03'=>'Payments & receipts'] as $id=>$topic) { $p=self::item($id);if(!$p){continue;} ?>
            <article><p class="wbc-reading-topic"><?php echo esc_html($topic); ?></p><h3><a href="<?php echo esc_url(get_permalink($p)); ?>"><?php echo esc_html($p->post_title); ?></a></h3><a class="wbc-text-link" href="<?php echo esc_url(get_permalink($p)); ?>">Read explainer <?php echo self::arrow(); ?></a></article>
        <?php } ?></div></section>
        <?php return ob_get_clean();
    }
    public static function content() {
        $post=get_post();$canonical=get_post_meta($post->ID,'_wbc_content_id',true);
        if ($canonical==='site-welcome') { echo self::home();return; }
        $content=$post->post_content;
        // Remove only our old generated duplicate navigation, preserving editorial text.
        $content=preg_replace('/<nav aria-label="Learning navigation"[^>]*>.*?<\/nav>/s','',$content,1);
        $app=has_shortcode($content,'wbc_app');
        if (!$app) { echo '<div class="wbc-container wbc-document"><p class="wbc-eyebrow">'.esc_html(str_starts_with($canonical,'A-')?'From the field guide':'Explore & understand').'</p><h1>'.esc_html(get_the_title()).'</h1><div class="wbc-prose">'; }
        echo apply_filters('the_content',$content);
        if (!$app) { echo '</div></div>'; }
    }
}
WBC_Site::boot();
