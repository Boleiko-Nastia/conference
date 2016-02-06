<?php
function get_article($id,$lang){
    global $db;
    $db->where ("cl.lang", $lang);
    $db->join('conference_lang cl',"cat.lang_id=cl.id","LEFT");
    $db->where ("cat.article_id", $id);
    $db->join('conference_article ca',"cat.article_id=ca.id","LEFT");
    return $db->get('conference_article_translation cat',NULL,'cat.title,cl.lang,cat.full_text,ca.addedby');
}

function set_article($data) {
    global $db;
    $id = $db->insert('conference_article_translation',$data);
    return $id;
}

function get_lang_by_name($name){
    global $db;
    $db->where('lang',$name);
    $lang = $db->get('conference_lang');
    return $lang[0]['id'];
}