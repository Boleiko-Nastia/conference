<?php
require_once('config.php');
require_once('../db/MysqliDb.php');
require_once('models/site_setting.php');
$cfg = site_setting_all();
session_start();
$name = $_POST['name'];
$password = $_POST['password'];

if($_GET['logout']) {
    unset($_SESSION['admin']);
    session_destroy();
    header('location: index.php ');
}
if (!$name || $name != $cfg['login'] || $password != $cfg['password']) {
    return false;
} else {
    $_SESSION['admin'] = $cfg['login'];
    return true;
}

?>
