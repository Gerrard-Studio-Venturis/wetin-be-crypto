<?php
if (!defined('ABSPATH')) { exit; }
/** Approval is bound to the exact private definition, not just a mutable ID. */
final class WBC_Review {
    public static function digest($a) { unset($a['approved']); return hash('sha256',wp_json_encode($a)); }
    public static function apply($activities) {
        $approvals=get_option('wbc_activity_approvals',[]);
        foreach ($activities as &$a) {
            $record=$approvals[$a['id']]??null;
            $a['approved']=$record && $record['approved'] && hash_equals($record['digest'],self::digest($a));
        }
        return $activities;
    }
    public static function boot() {
        add_action('admin_menu',function(){add_management_page('Practice publishing','Practice publishing','manage_options','wbc-review',[self::class,'screen']);});
        add_action('admin_post_wbc_review',[self::class,'submit']);
    }
    private static function definitions() { $d=require dirname(__DIR__).'/data/private-activities.php'; return $d['activities']??[]; }
    public static function screen() {
        if (!current_user_can('manage_options')) { return; }
        $activities=self::apply(self::definitions());
        echo '<div class="wrap"><h1>Practice publishing</h1><p>Approve or pause an exact activity revision after reviewing its scenario, choices, facilitator key, outcome mapping and prerequisites. Approval records the acting administrator and reason; it does not claim independent expert review. Changed definitions need a new approval.</p>';
        foreach ($activities as $a) {
            echo '<details><summary>'.esc_html($a['id'].' — '.$a['title']).' · '.(!empty($a['approved'])?'approved':'held').'</summary><div>'.wp_kses_post($a['fixture_html']).'</div>';
            foreach ($a['items'] as $item) {
                echo '<h3>'.esc_html($item['id'].' · '.implode(', ',$item['outcomes'])).'</h3><ul>';
                foreach (['actions','reasons'] as $kind) { foreach($item[$kind] as $choice){echo '<li>'.esc_html($kind.' '.$choice['id'].': '.$choice['text']).'</li>';}}
                echo '</ul><p><strong>Key: '.esc_html($item['answer_action'].' / '.$item['answer_reason']).'</strong> '.esc_html($item['feedback']).'</p>';
            }
            echo '<form method="post" action="'.esc_url(admin_url('admin-post.php')).'">';wp_nonce_field('wbc_review');
            echo '<input type="hidden" name="action" value="wbc_review"><input type="hidden" name="activity_id" value="'.esc_attr($a['id']).'"><input type="hidden" name="digest" value="'.esc_attr(self::digest($a)).'"><label>Review / correction reason <input name="reason" required maxlength="500"></label><button class="button" name="approved" value="1">Approve this revision</button><button class="button" name="approved" value="0">Pause this revision</button></form></details>';
        }
        echo '</div>';
    }
    public static function submit() {
        if (!current_user_can('manage_options')) { wp_die('Administrator access required.',403); }
        check_admin_referer('wbc_review');
        $id=sanitize_text_field(wp_unslash($_POST['activity_id']??''));$reason=sanitize_text_field(wp_unslash($_POST['reason']??''));
        if ($reason==='') { wp_die('Record a review reason.'); }
        foreach (self::definitions() as $a) {
            if ($a['id']!==$id) { continue; }
            $digest=self::digest($a);
            if (!hash_equals($digest,sanitize_text_field(wp_unslash($_POST['digest']??'')))) { wp_die('The definition changed. Reload and review the current revision.'); }
            $record=['approved'=>($_POST['approved']??'0')==='1','digest'=>$digest,'revision'=>$a['revision'],'reviewer_id'=>get_current_user_id(),'reason'=>$reason,'at'=>time()];
            $approvals=get_option('wbc_activity_approvals',[]);$approvals[$id]=$record;update_option('wbc_activity_approvals',$approvals,false);
            $audit=get_option('wbc_review_audit',[]);$audit[]=array_merge(['activity_id'=>$id],$record);update_option('wbc_review_audit',$audit,false);
            wp_safe_redirect(admin_url('tools.php?page=wbc-review'));exit;
        }
        wp_die('Activity not found.');
    }
}
WBC_Review::boot();
