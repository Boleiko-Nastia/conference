<?
include_once('common.php');
$section = $_POST['section'];
$fullname = $_POST['fullname'];
$job = $_POST['job'];
$lecturetitle = $_POST['titlelecture'];

require_once('templates/add_user_conf.template.php');