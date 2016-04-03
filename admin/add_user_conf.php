<?php
include_once('models/add_user_conf.model.php');
include_once('common.php');
$section_id = $_POST['section'];
$fullname = $_POST['fullname'];
$job = $_POST['job'];
$titlelecture = $_POST['titlelecture'];
if($section_id && $fullname && $job && $titlelecture) {
    $id = addMember($fullname,$job,$titlelecture,$section_id);
    if($id) {
        header('Location: add_user_conf.php');
    }
}

$sections = getAllSection();
$members = getMembers();

require_once('templates/add_user_conf.template.php');