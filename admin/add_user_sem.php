<?php
require_once('common.php');
$fullname = $_POST['fullname'];
$mentorname = $_POST['mentorname'];
$job = $_POST['job'];
$titlelecture = $_POST['titlelecture'];

require_once('templates/add_user_sem.template.php');