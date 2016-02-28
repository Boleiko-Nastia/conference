<?php
require_once('settings.php');
require_once('admin/models/site_news.model.php');

$articles = array();
$public_articles = array();
$articles = get_articles($_GET['id']);
foreach ($articles as $id => $lan) {
    if ($lan[strtolower($lang['LANG'])] == NULL) {
        $public_articles[$id] = array_shift($lan);
    } else {
        $public_articles[$id] = $lan[strtolower($lang['LANG'])];
    }
}

require_once('admin/templates/site_news.template.php');