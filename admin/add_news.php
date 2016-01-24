<?
require_once('common.php');
require_once('models/add_news.model.php');
$title = $_POST['title'];
$name = $_POST['name'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$image = $_POST['articleimage'];
$article = $_POST['article'];
$sendnewsletter = $_POST['sendnewsletter'];
require_once('templates/add_news.template.php');