<?php
include_once('models/add_user_sem.model.php');
require_once('common.php');
$fullname = $_POST['fullname'];
$mentorname = $_POST['mentorname'];
$job = $_POST['job'];
$titlelecture = $_POST['titlelecture'];
if($fullname && $mentorname && $job && $titlelecture) {
    $id = addMember($fullname,$job,$titlelecture,$mentorname);
    if($id) {
        header('Location: add_user_sem.php');
    }
}
$members = getMembers();

require_once('templates/add_user_sem.template.php');