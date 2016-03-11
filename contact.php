<?php
require_once('settings.php');
require_once('admin/models/site_setting.php');
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
if ($message && $email && $name) {
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
    $mail->setFrom($email, $name);

    $mail->addAddress('mst@nure.ua', "PMW");

    $info = new SplFileInfo($_FILES['userfile']['name']);
    $uploadfile = $_FILES['userfile']['name'];
    $mail->addAttachment($_FILES['userfile']['tmp_name'], $uploadfile);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $text;
    $mail->send();
}
require_once('admin/templates/site_contact.template.php');