<?php
// Standalone pure grading checks; no WordPress installation is implied.
define('ABSPATH', __DIR__ . '/');
require dirname(__DIR__) . '/includes/backend.php';
$fixture=['outcomes'=>['O-04.2'],'items'=>[
 ['id'=>'essential','class'=>'E','answer_action'=>'B','answer_reason'=>'2','feedback'=>'Check the receiving route.'],
 ['id'=>'concept','class'=>'C','answer_action'=>'A','answer_reason'=>'1','feedback'=>'Separate the records.'],
]];
function check($condition,$message) { if (!$condition) { throw new RuntimeException($message); } }
$r=WBC_Backend::grade($fixture,['essential'=>['action'=>'B','reason'=>'2'],'concept'=>['action'=>'A','reason'=>'1']]);
check($r['passed'] && $r['outcomes']===['O-04.2'],'Complete correct decision/reason pairs must pass their mapped outcome.');
$r=WBC_Backend::grade($fixture,['essential'=>['action'=>'A','reason'=>'2'],'concept'=>['action'=>'A','reason'=>'1']]);
check(!$r['passed'] && !$r['outcomes'],'An essential error cannot be offset by an unrelated correct pair.');
$r=WBC_Backend::grade($fixture,['essential'=>['action'=>'B','reason'=>'2'],'concept'=>['action'=>'A','reason'=>'3']]);
check(!$r['passed'],'A correct action without its correct reason does not pass.');
check(!WBC_Backend::grade($fixture,[])['passed'],'Missing answers cannot pass.');
check(!WBC_Backend::grade(['items'=>[],'outcomes'=>['O-01.1']],[])['passed'],'An empty assessment cannot pass.');
echo "5 grading checks passed\n";
