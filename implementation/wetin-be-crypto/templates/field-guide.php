<?php if (!defined('ABSPATH')) { exit; } ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head><meta charset="<?php bloginfo('charset'); ?>"><meta name="viewport" content="width=device-width, initial-scale=1"><?php wp_head(); ?></head>
<body <?php body_class('wbc-site'); ?>>
<?php wp_body_open(); WBC_Site::header(); ?>
<main id="main-content" class="wbc-site-main"><?php WBC_Site::content(); ?></main>
<?php WBC_Site::footer(); wp_footer(); ?>
</body></html>
