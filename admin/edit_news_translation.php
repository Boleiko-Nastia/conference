<?php
require_once('common.php');
require_once('models/edit_news_translation.model.php');
$article_id = $_GET['article'];
$lang_id = $_GET['lang'];
$article = get_article($article_id,$lang_id);
$article = $article[0];

if($article_id && $lang_id && $_POST){
    $title = $_POST['title'];
    $addedby = $_POST['name'];
    $full_text = $_POST['article'];
    $lang = get_lang_by_name($lang_id);

    $data = array('title' => $title, 'addedby' => $addedby, 'full_text'=> $full_text, 'article_id' => $article_id, 'lang_id' => $lang);
    $present = check_article($data);
    if($present) {
        update_article($data);
    } else {
        set_article($data);
    }
    header('Location: edit_news_translation.php?article='.$article_id.'&lang='.$lang_id);
}

require_once('templates/edit_news_translation.php');