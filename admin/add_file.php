<?php
include_once('models/add_file.model.php');
include_once('helper/add_file_functions.php');
include_once('common.php');
$addfile = $_FILES['addfile'];
$postname = $_POST['postname'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$info = new SplFileInfo($_FILES['addfile']['name']);
$filesize = FileSizeConvert(filesize($_FILES['addfile']['tmp_name']));
$date =  time();
$data = array('file_name' => $postname, 'create_date' => date('Y-m-d', $date), 'size' => $filesize, 'type'=>$info->getExtension() );
$id = add_file($data);

if($id) {
    $uploads_dir = '../files/';
    if(!is_dir($uploads_dir)){
        mkdir($uploads_dir);
        chmod($uploads_dir, 0777);
    }
    $uploadfile = $uploads_dir . basename($id).'.'.$info->getExtension();
    $upload_bool = move_uploaded_file($_FILES['addfile']['tmp_name'], $uploadfile);
    if($upload_bool == false) {

    }

}

require_once('templates/add_file.template.php');