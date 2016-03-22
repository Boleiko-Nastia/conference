<?php
function add_image($data){
    global $db;
    $id = $db->insert('conference_images',$data);
    return $id;
}

function add_article($data){
    global $db;
    $id = $db->insert('conference_article',$data);
    return $id;
}

function add_news($data){
    global $db;
    $id = $db->insert('conference_article_translation',$data);
    return $id;
}

function get_lang(){
    global $db;
    return $db->get('conference_lang');
}

function delNews($id){
    global $db;
    $db->where('id', $id);
    $db->delete('conference_article');
    $db->where('article_id', $id);
    $db->delete('conference_article_translation');
}