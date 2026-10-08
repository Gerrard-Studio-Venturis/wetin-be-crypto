<?php
// Disposable local WordPress only; public CMS edits and route isolation.
if (!defined('ABSPATH')) {exit;}
global $checks;$checks=0;
function presentation_verify($ok,$message){global $checks;if(!$ok){throw new RuntimeException($message);}$checks++;}
$map=get_option('wbc_published_map');$id=$map['A-EX-01'];$post=get_post($id);$original=$post->to_array();$old_query=$GLOBALS['wp_query'];
try {
 wp_update_post(['ID'=>$id,'post_title'=>'Edited public explainer','post_content'=>'<!-- wp:paragraph --><p>New public editorial wording.</p><!-- /wp:paragraph -->']);
 $catalog=WBC_Backend::catalog(new WP_REST_Request('GET','/wbc/v1/catalog'))->get_data();
 $article=current(array_filter($catalog['articles'],fn($a)=>$a['id']==='A-EX-01'));
 presentation_verify($article['title']==='Edited public explainer' && str_contains($article['body_html'],'New public editorial wording.'),'CMS edits are visible in the catalogue');
 presentation_verify(!str_contains($article['body_html'],'Learning navigation'),'Generated navigation is absent from reading');
 presentation_verify(str_ends_with(parse_url($article['image']['src'],PHP_URL_PATH),'/stablecoins.webp'),'Article illustration is served locally');
 presentation_verify($article['image']['width']===800 && $article['image']['height']===600,'Image has intrinsic dimensions');
 presentation_verify($article['url']===get_permalink($id),'Article has its canonical public URL');
 wp_update_post(['ID'=>$id,'post_status'=>'draft']);
 $catalog=WBC_Backend::catalog(new WP_REST_Request('GET','/wbc/v1/catalog'))->get_data();
 presentation_verify(!array_filter($catalog['articles'],fn($a)=>$a['id']==='A-EX-01'),'Unpublished article disappears from catalogue');
 $GLOBALS['wp_query']=new WP_Query(['page_id'=>$map['site-learn']]);
 presentation_verify(str_ends_with(WBC_Site::template('theme.php'),'/templates/field-guide.php'),'Owned page receives the design');
 $sample=wp_insert_post(['post_type'=>'page','post_status'=>'publish','post_title'=>'Unrelated test page']);
 $GLOBALS['wp_query']=new WP_Query(['page_id'=>$sample]);
 presentation_verify(WBC_Site::template('theme.php')==='theme.php','Unrelated page retains its theme');
 wp_delete_post($sample,true);
 echo "PASS $checks presentation integration assertions\n";
} finally {wp_update_post(wp_slash($original));$GLOBALS['wp_query']=$old_query;}
