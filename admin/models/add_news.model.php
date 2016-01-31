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