<?php
function get_articles($id = ''){
    global $db;
    if($id) {
        $db->where('cat.id',$id);
    }
    $db->orderBy('ca.id','DESC');
    $db->join("conference_article ca", "cat.article_id=ca.id", "LEFT");
    $db->join("conference_lang cl", "cat.lang_id=cl.id", "LEFT");
    $db->join("conference_images ci", "ci.id=ca.image_id", "LEFT");
    $article = $db->get('conference_article_translation cat',null,'cat.title,ci.id as image_id,ci.type as image_type,cat.full_text,cl.lang,cat.article_id,ca.date_create,ca.addedby');
    $result = array();
    foreach($article as $k => $v){
        $result[$v['article_id']][$v['lang']] = array('title' => $v['title'],'image_id'=>$v['image_id'],'addedby'=>$v['addedby'],'image_type'=>$v['image_type'],'full_text'=> $v['full_text'],'date_create' => $v['date_create']);
    }
    return $result ;
}