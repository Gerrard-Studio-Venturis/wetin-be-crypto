<?php
// Disposable test installation only. Suppress all delivery; never deploy this file.
if (!defined('ABSPATH')) {exit;}
add_filter('pre_wp_mail',function($short,$atts){
 $path='/tmp/wbc-test-mails.json';$messages=file_exists($path)?json_decode(file_get_contents($path),true):[];
 $messages[]=$atts;file_put_contents($path,wp_json_encode($messages));return true;
},10,2);
