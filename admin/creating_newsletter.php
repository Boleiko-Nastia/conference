<?php
include_once('common.php');
include_once('libs/PHPMailer/PHPMailerAutoload.php');
include_once('models/creating_newsletter.model.php');
include_once('models/site_setting.php');

if($_POST['email']){
    $emails = array();
    if($_COOKIE['email']) {
        $emails = explode(',', $_COOKIE['email']);
    }
    if($emails && array_search($_POST['email'],$emails)) {
        $id = array_search($_POST['email'],$emails);
    }
    if($id) {
        echo 'no';
    } else {
        setcookie('email',$_COOKIE['email'].','.$_POST['email']);
        echo 'yes';
    }
    exit;
}

$subject = $_POST['object'];
$textBody = $_POST['maintext'];
$file = $_FILES['userfile']['name'];
$checkboxSendNewsletter = $_POST['sendnewsletter'];
$domain = $_SERVER['SERVER_NAME'];
$cfg = site_setting_all();
$text = file_get_contents('templates/mail.template.php');
$text = str_replace('%title%', $subject, $text);
$text = str_replace('%maintext%', $textBody, $text);
$text = str_replace('%domain%', $domain, $text);
if($_COOKIE['email']) {
    $emails = explode(',', $_COOKIE['email']);
}

if ($_POST['object']) {
    $cfg = site_setting_all();
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $cfg['email_user']->value; //gmail login
    $mail->Password = $cfg['email_passwd']->value; // gmail password
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';
    $mail->SMTPSecure = 'ssl';
    $mail->setFrom('turumburum@gmail.com', 'Mailer');
    if($_POST['sendnewsletter'] == 'on') {
        $emails = getEmails();
    }
    foreach($emails as $count => $email) {
        if(!$email)continue;
        $mail->addAddress($email, $email);
    }
    if($_FILES['userfile']['name']) {
        $info = new SplFileInfo($_FILES['userfile']['name']);
        $uploadfile = $_FILES['userfile']['name'];
        $mail->addAttachment($_FILES['userfile']['tmp_name'], $uploadfile);
    }
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $text;
    $mail->send();
    setcookie('email', NULL);
}


require_once('templates/creating_newsletter.template.php');