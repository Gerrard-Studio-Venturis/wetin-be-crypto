<?php
// Disposable WordPress only. Fixture approval exists in process memory, never source files.
if (!defined('ABSPATH')) { exit; }
global $checks; $checks=0;
function assessment_verify($condition,$message) { global $checks; if (!$condition) { throw new RuntimeException($message); } $checks++; }
function assessment_request($method,$path,$data=[]) {
    $request=new WP_REST_Request($method,'/wbc/v1/'.$path);
    $request->set_body_params($data);
    $request->set_header('x_wbc_token',$_COOKIE['wbc_csrf'] ?? '');
    return rest_do_request($request);
}
wp_set_current_user(0);
$_COOKIE['wbc_csrf']=str_repeat('b',64);
$fixture=[
 'id'=>'WBC-TEST-KC','canonical_id'=>'WBC-TEST-KC','kind'=>'check','revision'=>'test-v1','approved'=>true,
 'outcomes'=>['O-TEST.1'],'prerequisites'=>[],'fixture_html'=>'<p>Fictional test fixture.</p>',
 'items'=>[
  ['id'=>'test-essential','class'=>'E','actions'=>[['id'=>'A','text'=>'Supported'],['id'=>'B','text'=>'Unsupported']],'reasons'=>[['id'=>'1','text'=>'Compatible'],['id'=>'2','text'=>'Wrong']],'answer_action'=>'A','answer_reason'=>'1','feedback'=>'Inspect compatibility.'],
  ['id'=>'test-concept','class'=>'C','actions'=>[['id'=>'A','text'=>'Separate records'],['id'=>'B','text'=>'One record']],'reasons'=>[['id'=>'1','text'=>'Distinct stages'],['id'=>'2','text'=>'Same stage']],'answer_action'=>'A','answer_reason'=>'1','feedback'=>'Separate the stages.'],
 ],
];
$mission=$fixture;$mission['id']='WBC-TEST-PM';$mission['canonical_id']='WBC-TEST-PM';$mission['kind']='mission';$mission['prerequisites']=['O-TEST.1'];
$reflection=new ReflectionProperty(WBC_Backend::class,'activities');$reflection->setAccessible(true);
// Populate lazy catalog first so load() cannot replace the runtime fixture list.
assessment_request('GET','catalog');$original=$reflection->getValue();$reflection->setValue(null,[$fixture,$mission]);
try {
 assessment_verify(assessment_request('POST','guest',['memory'=>false])->get_status()===200,'Guest test visit starts');
 $cookie=$_COOKIE['wbc_guest'];
 $started=assessment_request('POST','attempt',['activity_id'=>$fixture['id']]);
 assessment_verify($started->get_status()===200,'Approved runtime fixture starts');
 $start=$started->get_data();$id=$start['attempt_id'];
 assessment_verify(!str_contains(wp_json_encode($start),'answer_action')&&!str_contains(wp_json_encode($start),'answer_reason'),'Start excludes grading keys');
 assessment_verify(assessment_request('POST','attempt',['activity_id'=>$mission['id']])->get_status()===409,'Missing mapped outcome blocks mission');
 $answers=['test-essential'=>['action'=>'A','reason'=>'1'],'test-concept'=>['action'=>'A','reason'=>'1']];
 $checkpoint=assessment_request('POST','attempt/'.$id.'/checkpoint',['revision'=>0,'answers'=>$answers]);
 assessment_verify($checkpoint->get_status()===200&&$checkpoint->get_data()['revision']===1,'Checkpoint durably advances revision');
 $resume=assessment_request('GET','attempt/'.$id)->get_data();
 assessment_verify($resume['answers']===$answers&&!str_contains(wp_json_encode($resume),'answer_action'),'Own checkpoint resumes without keys');
 assessment_verify(assessment_request('POST','attempt/'.$id.'/submit',['revision'=>0,'answers'=>$answers])->get_status()===409,'Stale submission rejected');
 $submitted=assessment_request('POST','attempt/'.$id.'/submit',['revision'=>1,'answers'=>$answers]);
 assessment_verify($submitted->get_status()===200&&$submitted->get_data()['result']['passed'],'Server awards exact-version all-criterion pass');
 $replay=assessment_request('POST','attempt/'.$id.'/submit',['revision'=>1,'answers'=>$answers]);
 assessment_verify($replay->get_data()===$submitted->get_data(),'Submission replay returns original committed result');
 $journey=assessment_request('GET','journey')->get_data();
 assessment_verify(count($journey['records'])===1&&$journey['records'][0]['object_id']==='O-TEST.1','Replay awards mapped outcome once');
 assessment_verify(assessment_request('POST','attempt',['activity_id'=>$mission['id']])->get_status()===200,'Actual server prerequisite grants eligible mission');
 unset($_COOKIE['wbc_guest']);assessment_request('POST','guest',['memory'=>false]);$other=$_COOKIE['wbc_guest'];
 assessment_verify(assessment_request('GET','attempt/'.$id)->get_status()===404,'Another guest cannot resume private attempt');
 $failed=assessment_request('POST','attempt',['activity_id'=>$fixture['id']])->get_data();
 $wrong=$answers;$wrong['test-essential']['action']='B';
 $failed_result=assessment_request('POST','attempt/'.$failed['attempt_id'].'/submit',['revision'=>0,'answers'=>$wrong]);
 assessment_verify($failed_result->get_status()===200&&!$failed_result->get_data()['result']['passed'],'Essential error blocks pass despite correct unrelated row');
 assessment_verify(count(assessment_request('GET','journey')->get_data()['records'])===0,'Failure creates no reusable partial gate credit');
 assessment_verify(assessment_request('POST','attempt',['activity_id'=>$mission['id']])->get_status()===409,'Failed essential check cannot unlock mission');
 $_COOKIE['wbc_guest']=$cookie;
 $old=assessment_request('POST','attempt',['activity_id'=>$fixture['id']])->get_data();
 $replacement=$fixture;$replacement['revision']='test-v2';$replacement['items'][0]['answer_action']='B';
 $reflection->setValue(null,[$replacement,$mission]);
 $bound=assessment_request('POST','attempt/'.$old['attempt_id'].'/submit',['revision'=>0,'answers'=>$answers]);
 assessment_verify($bound->get_status()===200&&$bound->get_data()['result']['passed'],'Ordinary replacement grades bound original version, not changed key');
 $history=assessment_request('GET','journey')->get_data();
 assessment_verify(count($history['records'])===2&&$history['records'][1]['version']==='test-v1','Prior version remains immutable history');
 $reflection->setValue(null,[$fixture,$mission]);
 $transactional=assessment_request('POST','attempt',['activity_id'=>$fixture['id']])->get_data();
 global $wpdb;
 $fault=function($sql) use ($wpdb) {
  if (str_starts_with($sql,'INSERT INTO `'.$wpdb->prefix.'wbc_records`')) { return 'INSERT INTO `'.$wpdb->prefix.'wbc_records` (missing_fixture_column) VALUES (1)'; }
  return $sql;
 };
 $old_errors=$wpdb->suppress_errors(true);add_filter('query',$fault);
 try { $failed_save=assessment_request('POST','attempt/'.$transactional['attempt_id'].'/submit',['revision'=>0,'answers'=>$answers]); }
 finally { remove_filter('query',$fault);$wpdb->suppress_errors($old_errors); }
 assessment_verify($failed_save->get_status()===503,'Database evidence failure does not confirm saved result');
 $rolled_back=assessment_request('GET','attempt/'.$transactional['attempt_id'])->get_data();
 assessment_verify($rolled_back['status']==='open'&&$rolled_back['revision']===0,'Failed evidence transaction rolls back attempt state');
 assessment_verify(assessment_request('POST','attempt/'.$transactional['attempt_id'].'/submit',['revision'=>0,'answers'=>$answers])->get_data()['result']['passed'],'Recoverable failed write can be retried without lost work');
 $held=assessment_request('POST','attempt',['activity_id'=>$fixture['id']])->get_data();
 $correction=$fixture;$correction['essential_correction']=true;$reflection->setValue(null,[$correction,$mission]);
 assessment_verify(assessment_request('POST','attempt/'.$held['attempt_id'].'/submit',['revision'=>0,'answers'=>$answers])->get_status()===409,'Known essential correction holds in-flight grading');
 assessment_verify(assessment_request('POST','attempt',['activity_id'=>$fixture['id']])->get_status()===409,'Known essential correction prevents new scored starts');
 $history=assessment_request('GET','journey')->get_data();
 assessment_verify(count($history['records'])===3&&!$history['records'][0]['applicable'],'Correction preserves history while removing current eligibility');
 $hash=hash_hmac('sha256',$_COOKIE['wbc_guest'],wp_salt('auth'));
 $wpdb->update($wpdb->prefix.'wbc_principals',['expires'=>time()-1],['token_hash'=>$hash]);
 assessment_verify(assessment_request('POST','attempt/'.$held['attempt_id'].'/submit',['revision'=>0,'answers'=>$answers])->get_status()===410,'Expired guest cannot commit an open attempt');
 $wpdb->update($wpdb->prefix.'wbc_principals',['expires'=>time()+7200],['token_hash'=>$hash]);
} finally {
 $reflection->setValue(null,$original);
 $_COOKIE['wbc_guest']=$cookie;assessment_request('POST','guest/clear');
 $_COOKIE['wbc_guest']=$other ?? '';assessment_request('POST','guest/clear');
}
echo "PASS $checks assessment WordPress integration assertions\n";
