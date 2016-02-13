<?php
include_once('common.php');
include_once('libs/PHPMailer/PHPMailerAutoload.php');
include_once('models/creating_newsletter.model.php');

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
} else {
    echo 'false';
}

$subject = $_POST['object'];
$text = $_POST['maintext'];
$file = $_FILES['userfile']['name'];
$checkboxSendNewsletter = $_POST['sendnewsletter'];

if($_POST['object']) {
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
        $mail->setFrom('turumburum@gmail.com', 'Mailer');
    $emails = getEmails();
    foreach($emails as $count => $email) {
        $mail->addAddress($email['email'], $email['name']);
    }
    $info = new SplFileInfo($_FILES['userfile']['name']);
    $uploadfile =  $_FILES['userfile']['name'];
    $mail->addAttachment($_FILES['userfile']['tmp_name'], $uploadfile);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $text;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}

require_once('templates/creating_newsletter.template.php');