<?
include_once('common.php');
include_once('models/creating_newsletter.model.php');
$object = $_POST['object'];
$text = $_POST['maintext'];
$file = $_FILES['userfile']['name'];
$checkboxSendNewsletter = $_POST['sendnewsletter'];
$nameReceiver = $_POST['nameReceiver'];
$emailReceiver = $_POST['emailReceiver'];

require_once('templates/creating_newsletter.template.php');