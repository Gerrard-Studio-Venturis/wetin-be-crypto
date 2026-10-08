<?php
// Run using wp eval-file; use a disposable test site only.
if (!defined('ABSPATH')) { exit; }
global $checks; $checks=0;
function verify($condition,$message) { global $checks; if (!$condition) { throw new RuntimeException($message); } $checks++; }
function req($method,$path,$data=[],$csrf=false) {
    $r=new WP_REST_Request($method,'/wbc/v1/'.$path);
    if ($data) { $r->set_body_params($data); }
    if ($csrf) { $r->set_header('x_wbc_token',$_COOKIE['wbc_csrf']??''); }
    if (get_current_user_id()) { $r->set_header('x_wp_nonce',wp_create_nonce('wp_rest')); }
    return rest_do_request($r);
}
wp_set_current_user(0);
$cat=req('GET','catalog'); $data=$cat->get_data();
verify($cat->get_status()===200,'Public catalogue loads');
verify(count($data['lessons'])===32 && count($data['articles'])===6,'Canonical reading manifest');
verify(count($data['activities'])===32,'All activity metadata present');
verify(!str_contains(wp_json_encode($data),'answer_action') && !str_contains(wp_json_encode($data),'answer_reason'),'Public responses exclude keys');
verify(req('GET','bookmarks')->get_status()===401,'Bookmarks require account');
verify(req('POST','completion',['lesson_id'=>'L-01.1'])->get_status()===403,'Guest CSRF required');
$_COOKIE['wbc_csrf']=str_repeat('a',64);
verify(req('POST','guest',['memory'=>true],true)->get_status()===200,'Guest opt-in succeeds');
verify(req('POST','completion',['lesson_id'=>'L-01.1'],true)->get_status()===200,'Reading completion saves');
$journey=req('GET','journey')->get_data();verify(count($journey['records'])===1 && $journey['records'][0]['object_id']==='L-01.1' && $journey['mode']==='remembered','Guest journey loads');
$deadline=$journey['expires_at'];sleep(1);
verify(req('POST','completion',['lesson_id'=>'L-01.1'],true)->get_data()['already_saved'],'Duplicate completion idempotent');
verify(req('GET','journey')->get_data()['expires_at']===$deadline,'Duplicate does not extend memory');
verify(req('POST','attempt',['activity_id'=>'KC-01-A'],true)->get_status()===409,'Unapproved practice held');
$guestCookie=$_COOKIE['wbc_guest'];
$u1=wp_create_user('wbc-integration-'.wp_generate_password(8,false),wp_generate_password(24),'one-'.time().'@example.invalid');
$u2=wp_create_user('wbc-integration-'.wp_generate_password(8,false),wp_generate_password(24),'two-'.time().'@example.invalid');
verify(!is_wp_error($u1)&&!is_wp_error($u2),'Test accounts created');
wp_set_current_user($u1);
$r=req('POST','bookmark',['article_id'=>'A-EX-01','saved'=>true,'revision'=>0]);verify($r->get_status()===200,'Account bookmark saves');
verify(req('POST','bookmark',['article_id'=>'A-EX-01','saved'=>false,'revision'=>0])->get_status()===409,'Stale bookmark rejected');
wp_set_current_user($u2);verify(count(req('GET','bookmarks')->get_data()['bookmarks'])===0,'Accounts isolated');
wp_set_current_user($u1);
$preview=req('GET','import-preview')->get_data();
$importInput=['intent'=>'save_progress','operation_id'=>'integration-operation-01','target_user_id'=>$u1,'source_ids'=>array_column($preview['items'],'source_id')];
$r=req('POST','import',$importInput);verify($r->get_status()===200,'Explicit import commits');
verify(count(req('GET','journey')->get_data()['records'])===1,'Imported completion present');
verify(req('POST','import',$importInput)->get_data()===$r->get_data(),'Import receipt replay recovers without guest');
wp_set_current_user(0);$_COOKIE['wbc_guest']=$guestCookie;verify(count(req('GET','journey')->get_data()['records'])===0,'Confirmed source removed');
verify(req('POST','guest',['memory'=>false],true)->get_status()===200,'New visit starts');
global $wpdb;$hash=hash_hmac('sha256',$_COOKIE['wbc_guest'],wp_salt('auth'));
$wpdb->update($wpdb->prefix.'wbc_principals',['expires'=>time()-1],['token_hash'=>$hash]);
verify(req('GET','journey')->get_data()['mode']==='unsaved','Server rejects expired guest');
wp_set_current_user($u1);verify(req('GET','export')->get_status()===200,'Account export available');
require_once ABSPATH.'wp-admin/includes/user.php';wp_delete_user($u1);wp_delete_user($u2);
wp_set_current_user(0);
echo "PASS $checks WordPress integration assertions\n";
