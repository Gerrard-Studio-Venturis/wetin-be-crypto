<?php
if (!defined('ABSPATH')) { exit; }
/** The field-guide presentation is scoped to our canonical content only. */
final class WBC_Site {
    const VERSION='0.3.0';
    public static function boot() {
        add_filter('template_include',[self::class,'template'],99);
        add_action('wp_enqueue_scripts',[self::class,'assets']);
        add_action('login_enqueue_scripts',[self::class,'login_assets']);
        add_filter('login_headerurl',function(){return home_url('/');});
        add_filter('login_headertext',function(){return 'Wetin Be Crypto';});
        add_shortcode('wbc_home',[self::class,'home']);
    }
    public static function owned() {
        return is_singular() && (bool)get_post_meta(get_queried_object_id(),'_wbc_content_id',true);
    }
    public static function template($template) {
        return self::styled_route() ? dirname(__DIR__).'/templates/field-guide.php' : $template;
    }
    private static function styled_route() {
        return self::owned() || (is_404() && get_post_meta((int)get_option('page_on_front'),'_wbc_content_id',true)==='site-welcome');
    }
    public static function assets() {
        if (!self::styled_route()) { return; }
        $base=plugins_url('assets/',dirname(__DIR__).'/wetin-be-crypto.php');
        wp_enqueue_style('dashicons');
        wp_enqueue_style('wbc-field-guide',$base.'site.css',[],self::VERSION);
        wp_enqueue_style('wbc-app',$base.'app.css',['wbc-field-guide'],self::VERSION);
        wp_enqueue_script('wbc-site',$base.'site.js',[],self::VERSION,true);
    }
    public static function login_assets() {
        wp_enqueue_style('wbc-login',plugins_url('assets/login.css',dirname(__DIR__).'/wetin-be-crypto.php'),[],self::VERSION);
    }
    public static function url($slug) { return home_url('/'.$slug.'/'); }
    public static function image($name) { return plugins_url('assets/images/'.$name,dirname(__DIR__).'/wetin-be-crypto.php'); }
    public static function illustration($id) {
        $images=[
            'A-EX-01'=>['stablecoins.webp','A coin and a basket of goods on a balance scale, with changing conditions around them.'],
            'A-EX-02'=>['custody.webp','A learner considering a wallet, a key and a locked recovery box.'],
            'A-EX-03'=>['fictional-story.webp','A magnifying glass examines a fictional receipt.'],
            'A-EX-04'=>['networks.webp','Two separate networks with distinct tokens.'],
            'A-STORY-01'=>['fictional-story.webp','A magnifying glass examines a fictional receipt.'],
            'A-NEWS-02'=>['field-guide-book.webp','An illustrated field guide to assets, networks and services.'],
            'H-BTC'=>['networks.webp','Separate networks help explain why the route matters.'],
            'H-ETH'=>['field-guide-book.webp','A field guide connects an asset, a network and a service.'],
            'H-USDC'=>['stablecoins.webp','A balance scale introduces questions about stable value.'],
            'H-WALLETS'=>['custody.webp','A learner considering custody and recovery.'],
            'H-SCAMS'=>['fictional-story.webp','Inspecting the evidence behind a claim.'],
            'H-STABLECOINS'=>['stablecoins.webp','A balance scale introduces questions about stable value.'],
        ];
        if (!isset($images[$id])) { return null; }
        [$file,$alt]=$images[$id];
        $size=$file==='field-guide-book.webp'?[1100,550]:($file==='fictional-story.webp'?[640,480]:[800,600]);
        return ['src'=>self::image($file),'alt'=>$alt,'width'=>$size[0],'height'=>$size[1]];
    }
    public static function figure($id,$class='wbc-editorial-image') {
        $image=self::illustration($id);if (!$image) { return ''; }
        return '<figure class="'.esc_attr($class).'"><img src="'.esc_url($image['src']).'" alt="'.esc_attr($image['alt']).'" width="'.(int)$image['width'].'" height="'.(int)$image['height'].'" loading="lazy" decoding="async"></figure>';
    }
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
        if (is_user_logged_in()) { echo '<a href="'.esc_url(wp_logout_url(home_url('/'))).'">Sign out</a>'; }
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
            <div class="wbc-hero-copy"><p class="wbc-eyebrow">The crypto field guide</p><h1>Understand<br>crypto. Ask<br><span class="wbc-highlight">better questions.</span></h1><p class="wbc-hero-description">Clear lessons, everyday examples and practical checks—at your own pace.</p><div class="wbc-hero-actions"><a class="wbc-primary" href="<?php echo esc_url(self::url('learn').'?lesson=L-01.1'); ?>">Start the foundation <?php echo self::arrow(); ?></a><a class="wbc-outline" href="<?php echo esc_url(self::url('articles')); ?>">Browse the field guide</a></div></div>
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
            <article><?php echo self::figure($id,'wbc-reading-image'); ?><p class="wbc-reading-topic"><?php echo esc_html($topic); ?></p><h3><a href="<?php echo esc_url(get_permalink($p)); ?>"><?php echo esc_html($p->post_title); ?></a></h3><a class="wbc-text-link" href="<?php echo esc_url(get_permalink($p)); ?>">Read explainer <?php echo self::arrow(); ?></a></article>
        <?php } ?></div></section>
        <?php return ob_get_clean();
    }
    public static function topics() {
        echo '<section class="wbc-container wbc-document"><p class="wbc-eyebrow">Explore the field guide</p><h1>Find your way around crypto.</h1><p class="wbc-topic-intro">Start with an asset, or explore the decisions that matter when you use it.</p><div class="wbc-topic-grid">';
        $descriptions=['H-BTC'=>'Understand Bitcoin, its network and the questions to ask before using it.','H-ETH'=>'Explore Ethereum, transaction permissions and how to check the evidence.','H-USDC'=>'Learn what the name tells you, and what still needs checking.','H-WALLETS'=>'Who has control? What could you recover? Understand the arrangement.','H-SCAMS'=>'Recognise pressure, promises and missing evidence.','H-STABLECOINS'=>'Understand reference values, redemption, fees and changing conditions.'];
        foreach($descriptions as $id=>$description) {
            $p=self::item($id);if(!$p){continue;}
            echo '<article>'.self::figure($id,'wbc-topic-image').'<h2><a href="'.esc_url(get_permalink($p)).'">'.esc_html($p->post_title).'</a></h2><p>'.esc_html($description).'</p><a class="wbc-text-link" href="'.esc_url(get_permalink($p)).'">Explore '.esc_html($p->post_title).' '.self::arrow().'</a></article>';
        }
        echo '</div></section>';
    }
    public static function content() {
        if (is_404()) {
            echo '<section class="wbc-container wbc-document"><p class="wbc-eyebrow">Let’s find your way</p><h1>This page has moved or is unavailable.</h1><p>Start with the foundation, or find a useful explanation in the field guide.</p><div class="wbc-hero-actions"><a class="wbc-primary" href="'.esc_url(self::url('learn')).'">Start learning</a><a class="wbc-outline" href="'.esc_url(self::url('articles')).'">Browse articles</a></div></section>';
            return;
        }
        $post=get_post();$canonical=get_post_meta($post->ID,'_wbc_content_id',true);
        if ($canonical==='site-welcome') { echo self::home();return; }
        if ($canonical==='site-topics') { self::topics();return; }
        $content=$post->post_content;
        // Remove only our old generated duplicate navigation, preserving editorial text.
        $content=preg_replace('/<nav aria-label="Learning navigation"[^>]*>.*?<\/nav>/s','',$content,1);
        $app=has_shortcode($content,'wbc_app');
        if (!$app) { echo '<div class="wbc-container wbc-document"><p class="wbc-eyebrow">'.esc_html(str_starts_with($canonical,'A-')?'From the field guide':'Explore & understand').'</p><h1>'.esc_html(get_the_title()).'</h1>'.self::figure($canonical).'<div class="wbc-prose">'; }
        echo apply_filters('the_content',$content);
        if (!$app) { echo '</div></div>'; }
    }
}
WBC_Site::boot();
