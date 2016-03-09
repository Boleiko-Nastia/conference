<?php
require_once('../../settings.php');
require_once('../models/site_index.model.php');
$name = $_POST['name'];
$surename = $_POST['surename'];
$lastname = $_POST['lastname'];
$study = $_POST['study'];
$degree = $_POST['degree'];
$event = $_POST['event'];
$participation_1 = $_POST['participation_1'];
$participation_2 = $_POST['participation_2'];
$participation_3 = $_POST['participation_3'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$position = $_POST['position'];
$data = array('name'=>$name,'middlename'=>$lastname,'job'=>$study,'degree'=>$degree,'surname'=>$surename,'internally'=>$event,'email'=>$email,'address'=>$address,'phone'=>$phone,'participation'=>$participation_1.','.$participation_2.','.$participation_3,'position'=>$position);
$id = add_user($data);
if($id){
    echo 'true';
} else {
    echo 'false';
}