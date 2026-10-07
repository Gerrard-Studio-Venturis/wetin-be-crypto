<?php
// Disposable WordPress only; publication status and accounts restored after assertions.
if (!defined('ABSPATH')) { exit; }
global $security_checks;$security_checks=0;
function security_check($ok,$message) { global $security_checks;if (!$ok) { throw new RuntimeException($message); }$security_checks++; }
function security_req($method,$path,$data=[]) {
 $r=new WP_REST_Request($method,'/wbc/v1/'.$path);$r->set_body_params($data);$r->set_header('x_wbc_token',$_COOKIE['wbc_csrf']??'');
 if (get_current_user_id()) { $r->set_header('x_wp_nonce',wp_create_nonce('wp_rest')); }
 return rest_do_request($r);
}
wp_set_current_user(0);$_COOKIE['wbc_csrf']=str_repeat('d',64);
security_check(security_req('POST','guest',['memory'=>'false'])->get_status()===422,'String false cannot enable guest memory');
security_req('POST','guest',['memory'=>true]);$cookie=$_COOKIE['wbc_guest'];
$r=security_req('POST','reading-position',['lesson_id'=>'L-01.1','position'=>0.42]);
security_check($r->get_status()===200&&$r->get_data()['changed'],'Changed explicit reading place is confirmed');
$journey=security_req('GET','journey')->get_data();
security_check(count($journey['records'])===1&&$journey['records'][0]['kind']==='position'&&$journey['records'][0]['object_id']==='L-01.1'&&$journey['records'][0]['payload']['position']===0.42,'Position stays separate from achievement and completion');
global $wpdb;$hash=hash_hmac('sha256',$cookie,wp_salt('auth'));$deadline=time()+999;
$wpdb->update($wpdb->prefix.'wbc_principals',['expires'=>$deadline],['token_hash'=>$hash]);
$duplicate=security_req('POST','reading-position',['lesson_id'=>'L-01.1','position'=>0.42]);
security_check(!$duplicate->get_data()['changed']&&security_req('GET','journey')->get_data()['expires_at']===$deadline,'Unchanged checkpoint does not renew memory');
$changed=security_req('POST','reading-position',['lesson_id'=>'L-01.1','position'=>0.68]);
security_check($changed->get_data()['changed']&&security_req('GET','journey')->get_data()['expires_at']>$deadline,'Genuine changed checkpoint renews accepted learning deadline');
security_check(security_req('POST','reading-position',['lesson_id'=>'L-01.1','position'=>1.1])->get_status()===422,'Out-of-range reading position rejected');
security_check(security_req('POST','reading-position',['lesson_id'=>'L-01.1','position'=>'0.2'])->get_status()===422,'Numeric-string position rejected');
security_check(security_req('POST','attempt/test-fixture/submit',['revision'=>-1,'answers'=>[]])->get_status()===422,'Negative revision rejected');
security_check(security_req('POST','attempt/test-fixture/submit',['revision'=>'0','answers'=>[]])->get_status()===422,'Numeric-string revision rejected');
$u=wp_create_user('security-test-'.wp_generate_password(8,false),wp_generate_password(24),'security-'.wp_generate_password(8,false).'@example.invalid');
$map=get_option('wbc_published_map',[]);$article=$map['A-EX-01']??0;$old=$article ? get_post_status($article):null;
try {
 wp_set_current_user($u);
 security_check(security_req('POST','bookmark',['article_id'=>'A-EX-01','saved'=>'false','revision'=>0])->get_status()===422,'String false cannot create bookmark');
 security_check(security_req('POST','bookmark',['article_id'=>'A-EX-01','saved'=>true,'revision'=>0])->get_status()===200,'Available article saves');
 security_check($article>0&&$old==='publish','Seed article has actual published identity');
 wp_update_post(['ID'=>$article,'post_status'=>'draft']);
 $public=security_req('GET','catalog')->get_data();
 security_check(!in_array('A-EX-01',array_column($public['articles'],'id'),true),'Withdrawal removes article body/title from public catalogue');
 security_check(security_req('GET','bookmarks')->get_data()['bookmarks'][0]['available']===false,'Owned bookmark reports unavailable withdrawal');
 security_check(security_req('POST','bookmark',['article_id'=>'A-EX-01','saved'=>true,'revision'=>1])->get_status()===410,'Withdrawn article cannot confirm a new save');
 wp_update_post(['ID'=>$article,'post_status'=>$old]);
 security_check(in_array('A-EX-01',array_column(security_req('GET','catalog')->get_data()['articles'],'id'),true),'Restored public article returns to catalogue');
} finally {
 if ($article&&$old) { wp_update_post(['ID'=>$article,'post_status'=>$old]); }
 wp_set_current_user(0);$_COOKIE['wbc_guest']=$cookie;security_req('POST','guest/clear');
 require_once ABSPATH.'wp-admin/includes/user.php';if (!is_wp_error($u)) { wp_delete_user($u); }
}
echo "PASS $security_checks security and position assertions\n";
