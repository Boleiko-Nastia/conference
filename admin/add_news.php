<?php
require_once('common.php');
require_once('models/add_news.model.php');
$title = $_POST['title'];
$name = $_POST['name'];
$image = $_FILES['articleimage'];
$article = $_POST['article'];
$langradio = $_POST['languages'];
$sendnewsletter = $_POST['sendnewsletter'];

require_once('templates/add_news.template.php');