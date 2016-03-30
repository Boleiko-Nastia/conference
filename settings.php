<?php
date_default_timezone_set( 'Europe/Kiev' );
session_start();
if($_POST['lang']) {
    setcookie('lang', $_POST['lang'], time() + (3600 * 24 * 30));
}

switch ($_COOKIE['lang']) {
    case 'eng':
        $lang_file = 'lang.eng.php';
        break;

    case 'ua':
        $lang_file = 'lang.ua.php';
        break;

    case 'ru':
        $lang_file = 'lang.ru.php';
        break;

    default:
        $lang_file = 'lang.ru.php';

}

include_once('lang/'.$lang_file);

require_once('admin/config.php');
require_once('db/MysqliDb.php');
$db = new Mysqlidb ('localhost', 'root', '', 'conference');