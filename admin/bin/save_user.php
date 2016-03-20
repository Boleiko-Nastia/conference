<?php
require_once('../models/add_user_conf.model.php');
require_once('../../settings.php');
$id = $_POST['id'];
$name = $_POST['name'];
$job = $_POST['job'];
$lecture_title = $_POST['lecture_title'];
$head = $_POST['head'];

saveUser($id,$name,$job,$lecture_title, $head);
