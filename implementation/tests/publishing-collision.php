<?php
// Disposable WordPress only. Tests preflight without deleting unrelated content.
if (!defined('ABSPATH')) { exit; }
$owned=get_page_by_path('learn');
if (!$owned || get_post_meta($owned->ID,'_wbc_content_id',true)!=='site-learn') { throw new Exception('Run seed importer first'); }
$before=wp_count_posts('page');$meta=get_post_meta($owned->ID,'_wbc_content_id',true);
try {
    delete_post_meta($owned->ID,'_wbc_content_id');
    $r=WBC_Publishing::publish(false);
    if (!is_wp_error($r) || $r->get_error_code()!=='route_collision') { throw new Exception('Unrelated Learn page was not protected'); }
    if (wp_count_posts('page')!=$before) { throw new Exception('Collision wrote public pages'); }
    if (get_post_meta($owned->ID,'_wbc_content_id',true)!=='') { throw new Exception('Collision adopted unrelated page'); }
    echo "PASS 3 reserved-route collision assertions\n";
} finally { update_post_meta($owned->ID,'_wbc_content_id',$meta); }
