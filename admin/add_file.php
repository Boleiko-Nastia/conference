<?php
include_once('common.php');
$addfile = $_FILES['addfile'];
$postname = $_POST['postname'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

require_once('templates/add_file.template.php');