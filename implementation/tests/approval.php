<?php
if (!defined('ABSPATH')) { exit; }
$d=require WP_PLUGIN_DIR.'/wetin-be-crypto/data/private-activities.php';$a=$d['activities'][0];
$before=get_option('wbc_activity_approvals',null);
try {
    update_option('wbc_activity_approvals',[$a['id']=>['approved'=>true,'digest'=>WBC_Review::digest($a)]],false);
    if (!WBC_Review::apply([$a])[0]['approved']) { throw new Exception('Exact definition approval not applied'); }
    $changed=$a;$changed['items'][0]['answer_action']='Z';
    if (WBC_Review::apply([$changed])[0]['approved']) { throw new Exception('Changed key inherited approval'); }
    $changed=$a;$changed['prerequisites'][]='O-08.4';
    if (WBC_Review::apply([$changed])[0]['approved']) { throw new Exception('Changed gate inherited approval'); }
    update_option('wbc_activity_approvals',[$a['id']=>['approved'=>false,'digest'=>WBC_Review::digest($a)]],false);
    if (WBC_Review::apply([$a])[0]['approved']) { throw new Exception('Paused activity remains approved'); }
    echo "PASS 4 exact-revision approval assertions\n";
} finally {
    if ($before===null) { delete_option('wbc_activity_approvals'); } else { update_option('wbc_activity_approvals',$before,false); }
}
