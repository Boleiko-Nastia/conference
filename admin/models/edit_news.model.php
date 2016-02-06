<?php
function get_articles(){
    global $db;
    $db->join("conference_article ca", "cat.article_id=ca.id", "LEFT");
    $db->join("conference_lang cl", "cat.lang_id=cl.id", "LEFT");
    $article = $db->get('conference_article_translation cat',null,'cat.title,cl.lang,cat.article_id,ca.date_create');

    $result = array();
    foreach($article as $k => $v){
        if($result[$v['article_id']])continue;
        $result[$v['article_id']] = array('title' => $v['title'],'date_create' => $v['date_create']);
    }

    return $result ;
}