<?php
require_once('common.php');
require_once('models/edit_news.model.php');
$articles = get_articles();
require_once('templates/edit_news.template.php');