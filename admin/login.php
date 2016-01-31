<?php

require_once('models/site_setting.php');
require_once('common.php');
$cfg = site_setting_all();
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
