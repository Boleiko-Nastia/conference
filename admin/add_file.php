<?php
include_once('models/add_file.model.php');
include_once('add_file_functions.php');
include_once('common.php');
$addfile = $_FILES['addfile'];
$postname = $_POST['postname'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$id = add_file($postname,time());

if($id) {
    $uploads_dir = '../files/';
    $info = new SplFileInfo($_FILES['addfile']['name']);
//    var_dump($info->getSize());exit;
    $uploadfile = $uploads_dir . basename($id).'.'.$info->getExtension();
    move_uploaded_file($_FILES['addfile']['tmp_name'], $uploadfile);
}

require_once('templates/add_file.template.php');