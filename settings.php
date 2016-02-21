<?php
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

//if($_POST['lang']) {
//    unset($_POST['lang']);
//    header("Location:" . $_SERVER['PHP_SELF']);
//}