<?php
include_once('common.php');
include_once('libs/PHPMailer/PHPMailerAutoload.php');
include_once('models/creating_newsletter.model.php');
include_once('models/site_setting.php');

if($_POST['name'] && $_POST['email']){
    $id = searchEmail($_POST['email']);
    if($id) {
        echo 'no';
    } else {
        $data = array('name' => $_POST['name'], 'email' => $_POST['email']);
        $id = addUser($data);
        echo 'yes';
    }
    exit;
}

$subject = $_POST['object'];
$text = $_POST['maintext'];
$file = $_FILES['userfile']['name'];
$checkboxSendNewsletter = $_POST['sendnewsletter'];
$cfg = site_setting_all();

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
    $emails = getEmails();
    foreach($emails as $count => $email) {
        $mail->addAddress($email['email'], $email['name']);
    }
    $info = new SplFileInfo($_FILES['userfile']['name']);
    $uploadfile = $_FILES['userfile']['name'];
    $mail->addAttachment($_FILES['userfile']['tmp_name'], $uploadfile);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $text;
    $mail->send();
}


require_once('templates/creating_newsletter.template.php');