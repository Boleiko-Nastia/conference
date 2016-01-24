<?
include_once('common.php');
$object = $_POST['object'];
$text = $_POST['maintext'];
$file = $_FILES['userfile']['name'];
$checkboxSendNewsletter = $_POST['sendnewsletter'];

require_once('templates/creating_newsletter.template.php');