<?php
// Run on a disposable WordPress site with imported seed pages.
if (!defined('ABSPATH')) { exit; }
global $import_checks;$import_checks=0;
function import_check($ok,$message) { global $import_checks;if (!$ok) { throw new RuntimeException($message); }$import_checks++; }
function import_req($method,$path,$data=[]) {
 $r=new WP_REST_Request($method,'/wbc/v1/'.$path);$r->set_body_params($data);$r->set_header('x_wbc_token',$_COOKIE['wbc_csrf']??'');
 if (get_current_user_id()) { $r->set_header('x_wp_nonce',wp_create_nonce('wp_rest')); }
 return rest_do_request($r);
}
wp_set_current_user(0);$_COOKIE['wbc_csrf']=str_repeat('c',64);
import_req('POST','guest',['memory'=>true]);$cookie=$_COOKIE['wbc_guest'];
foreach (['L-01.1','L-01.2','L-01.3'] as $id) { import_check(import_req('POST','completion',['lesson_id'=>$id])->get_status()===200,'Guest completion '.$id); }
$deadline=import_req('GET','journey')->get_data()['expires_at'];
$u=wp_create_user('import-test-'.wp_generate_password(8,false),wp_generate_password(24),'import-'.wp_generate_password(8,false).'@example.invalid');
$other=wp_create_user('import-test-'.wp_generate_password(8,false),wp_generate_password(24),'import-other-'.wp_generate_password(8,false).'@example.invalid');
import_check(!is_wp_error($u)&&!is_wp_error($other),'Disposable accounts');
try {
 wp_set_current_user($u);$preview=import_req('GET','import-preview')->get_data();
 import_check(count($preview['items'])===3&&$preview['target_user_id']===$u,'Preview reveals own guest selection, bound target');
 import_check(import_req('POST','import',['intent'=>'save_progress','operation_id'=>'selection-test-empty','target_user_id'=>$u])->get_status()===422,'Import requires explicit selection');
 $sources=[];foreach ($preview['items'] as $i) { $sources[$i['object_id']]=$i['source_id']; }
 $first=['intent'=>'save_progress','operation_id'=>'selection-test-first','target_user_id'=>$u,'source_ids'=>[$sources['L-01.1']]];
 $result=import_req('POST','import',$first);import_check($result->get_status()===200&&$result->get_data()['saved'],'Selected item confirmed');
 import_check(count(import_req('GET','journey')->get_data()['records'])===1,'Only selected item enters account');
 wp_set_current_user(0);$guest=import_req('GET','journey')->get_data();
 import_check(count($guest['records'])===2&&$guest['expires_at']===$deadline,'Unselected guest work remains without renewed retention');
 wp_set_current_user($u);import_check(import_req('POST','import',$first)->get_data()===$result->get_data(),'Lost-ack recovery uses committed receipt');
 $changed=$first;$changed['source_ids']=[$sources['L-01.2']];import_check(import_req('POST','import',$changed)->get_status()===409,'Operation cannot silently change selection');
 wp_set_current_user($other);$wrong=$first;$wrong['target_user_id']=$other;import_check(import_req('POST','import',$wrong)->get_status()===403,'Receipt cannot retarget another account');
 wp_set_current_user($u);$partial=['intent'=>'save_progress','operation_id'=>'selection-test-partial','target_user_id'=>$u,'source_ids'=>[$sources['L-01.2'],$sources['L-01.3']]];
 global $wpdb;
 $fault=function($sql) use ($wpdb) { if (str_starts_with($sql,'INSERT INTO `'.$wpdb->prefix.'wbc_records`')&&str_contains($sql,"'L-01.3'")) { return 'INSERT INTO `'.$wpdb->prefix.'wbc_records` (missing_fixture_column) VALUES (1)'; }return $sql; };
 $old=$wpdb->suppress_errors(true);add_filter('query',$fault);
 try { $r=import_req('POST','import',$partial); }finally { remove_filter('query',$fault);$wpdb->suppress_errors($old); }
 $p=$r->get_data();$statuses=array_column($p['items'],'status');
 import_check($r->get_status()===200&&!$p['saved']&&in_array('saved',$statuses,true)&&in_array('needs_retry',$statuses,true),'Independent item commits survive another item write failure');
 import_check(count(import_req('GET','journey')->get_data()['records'])===2,'Confirmed item stays in account after partial failure');
 wp_set_current_user(0);$g=import_req('GET','journey')->get_data();
 import_check(count($g['records'])===1&&$g['records'][0]['object_id']==='L-01.3'&&$g['expires_at']===$deadline,'Failed item stays recoverable at original expiry');
 $hash=hash_hmac('sha256',$cookie,wp_salt('auth'));$wpdb->update($wpdb->prefix.'wbc_principals',['expires'=>time()-1],['token_hash'=>$hash]);
 wp_set_current_user($u);$after=import_req('POST','import',$partial)->get_data();
 import_check(!$after['saved']&&in_array('saved',array_column($after['items'],'status'),true)&&in_array('ineligible',array_column($after['items'],'status'),true),'Expiry preserves confirmed receipt and rejects uncommitted remainder');
 import_check(count(import_req('GET','journey')->get_data()['records'])===2,'Expiry cannot remove confirmed account history');
 $wpdb->update($wpdb->prefix.'wbc_principals',['expires'=>time()+7200],['token_hash'=>$hash]);
 // A passed check's copied evidence must retain an authorised attempt provenance.
 $property=new ReflectionProperty(WBC_Backend::class,'activities');$property->setAccessible(true);$oldActivities=$property->getValue();
 $fixture=['id'=>'IMPORT-TEST-KC','canonical_id'=>'IMPORT-TEST-KC','kind'=>'check','revision'=>'test-v1','approved'=>true,'outcomes'=>['O-IMPORT.1'],'prerequisites'=>[],'fixture_html'=>'<p>Test only.</p>','items'=>[['id'=>'one','class'=>'E','actions'=>[['id'=>'A','text'=>'Supported']],'reasons'=>[['id'=>'1','text'=>'Compatible']],'answer_action'=>'A','answer_reason'=>'1','feedback'=>'Test feedback.']]];
 $property->setValue(null,[$fixture]);
 try {
  wp_set_current_user(0);$a=import_req('POST','attempt',['activity_id'=>$fixture['id']])->get_data();
  import_req('POST','attempt/'.$a['attempt_id'].'/submit',['revision'=>0,'answers'=>['one'=>['action'=>'A','reason'=>'1']]]);
  wp_set_current_user($u);$p=import_req('GET','import-preview')->get_data();$evidence=null;
  foreach ($p['items'] as $i) { if ($i['object_id']==='O-IMPORT.1') { $evidence=$i; } }
  import_check($evidence&&$evidence['dependencies']===['attempt:'.$a['attempt_id']],'Preview declares required private attempt provenance');
  $input=['intent'=>'save_progress','operation_id'=>'selection-test-dependent','target_user_id'=>$u,'source_ids'=>[$evidence['source_id']]];
  import_check(import_req('POST','import',$input)->get_status()===422,'Outcome copy cannot silently omit its required attempt');
  $input['source_ids'][]=$evidence['dependencies'][0];
  import_check(import_req('POST','import',$input)->get_data()['saved'],'Explicit attempt plus outcome imports in dependency order');
  import_check(import_req('GET','attempt/'.$a['attempt_id'])->get_status()===200,'Imported attempt is accessible only under account ownership');
 } finally { $property->setValue(null,$oldActivities); }
} finally {
 wp_set_current_user(0);$_COOKIE['wbc_guest']=$cookie;import_req('POST','guest/clear');
 require_once ABSPATH.'wp-admin/includes/user.php';wp_delete_user($u);wp_delete_user($other);
}
echo "PASS $import_checks per-record import assertions\n";
