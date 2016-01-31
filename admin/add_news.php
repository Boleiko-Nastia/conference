<?php
require_once('common.php');
require_once('models/add_news.model.php');
$data = array();
$data['addedby'] = $_POST['name'];
$image = $_FILES['articleimage'];

$sendnewsletter = $_POST['sendnewsletter'];

if($_POST['title']){
    if($image){
        $info = new SplFileInfo($image['name']);
        $image_id = add_image(array('name' => $image['name'],'type' => $info->getExtension()));

        if($image_id) {
            $uploads_dir = '../img/news-img/';
            $uploadfile = $uploads_dir . basename($image_id).'.'.$info->getExtension();
            move_uploaded_file($image['tmp_name'], $uploadfile);
        }
    }
    $data['date_create'] = date('Y-m-d',time());
    $data['image_id'] = $image_id;
    $article_id = add_article($data);
    unset($data);

    $data['article_id'] = $article_id;
    $data['title'] = $_POST['title'];
    $data['full_text'] = $_POST['article'];
    $lang_id = '';
    $lang = get_lang();
    $langradio = $_POST['languages'];
    foreach($lang as $lk => $lv){
        if($lv['lang'] == $langradio){
            $lang_id = $lv['id'];
        }
    }
    if($lang_id){
        $data['lang_id'] = $lang_id;
    }
    add_news($data);
}
require_once('templates/add_news.template.php');