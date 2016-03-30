<?php
date_default_timezone_set( 'Europe/Kiev' );
session_start();
set_time_limit(0);
ini_set('memory_limit', '128M');
require_once('config.php');
require_once('../db/MysqliDb.php');
$db = new Mysqlidb ('localhost', 'root', '', 'conference');
require_once('models/site_setting.php');
$cfg = site_setting_all();

if(empty($_SESSION['admin'])){
    header("Location: index.php");
}
