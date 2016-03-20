<?php
require_once('../../settings.php');
require_once('../models/site_index.model.php');
require_once('../models/site_setting.php');
require_once('../libs/PHPMailer/PHPMailerAutoload.php');
$name = $_POST['name'];
$surename = $_POST['surename'];
$lastname = $_POST['lastname'];
$study = $_POST['study'];
$job = $_POST['job'];
$degree = $_POST['degree'];
$event = $_POST['event'];
$participation = implode(',',array($_POST['participation_1'],$_POST['participation_2'],$_POST['participation_3']));
$email = $_POST['email'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$position = $_POST['position'];
$academictitle = $_POST['academic_title'];
$data = array('name'=>$name,'middlename'=>$lastname,'job'=>$job,'study'=>$study,'degree'=>$degree,'academictitle'=>$academictitle,'surname'=>$surename,'internally'=>$event,'email'=>$email,'address'=>$address,'phone'=>$tel,'participation'=>$participation,'position'=>$position);
$id = add_user($data);
if($id){
    echo 'true';
} else {
    echo 'false';
}
if($id) {
    $text = file_get_contents('../templates/mail_admin.template.php');
    $text = str_replace('%NSL%', $name.' '.$surename.' '.$lastname, $text);
    $text = str_replace('%surname%', $surename, $text);
    $text = str_replace('%name%', $name, $text);
    $text = str_replace('%lastname%', $lastname, $text);
    $text = str_replace('%study%', $study, $text);
    $text = str_replace('%job%', $job, $text);
    $text = str_replace('%degree%', $degree, $text);
    $text = str_replace('%academictitle%', $academictitle, $text);
    $internally = ($event) ? 'очное' : 'заочное';
    $text = str_replace('%internally%', $internally, $text);
    $text = str_replace('%participation%', $participation, $text);
    $text = str_replace('%email%', $email, $text);
    $text = str_replace('%tel%', $tel, $text);
    $text = str_replace('%address%', $address, $text);
    $domain = $_SERVER['SERVER_NAME'];
    $text = str_replace('%domain%', $domain, $text);
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
    $mail->addAddress('noskovgleb@mail.ru', 'Gleb');
    $mail->isHTML(true);
    $mail->Subject = 'Успешно зарегистрирован новый участник';
    $mail->Body = $text;
    $mail->send();
}