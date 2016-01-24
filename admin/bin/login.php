<?php
include_once ('../db/MysqliDb.php');
include_once('../common.php');
if (empty($_POST['name']) || empty($_POST['password'])) {
    echo "No arguments Provided!";
    return false;
}

//$admin_data = $db->get('conference_config');
$name = $_POST['name'];
$password = $_POST['password'];
//var_dump($name,$password);exit;
//var_dump($name,$cfg['login'],$password,$cfg['password']);exit;
if(!$name || $name!=$cfg['login'] || $password!=$cfg['password']) {
   return false;
} else {
    header('../main.php');
    return true;
}

?>