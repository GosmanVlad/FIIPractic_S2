<?php

$lang = 'ro';

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

if (!isset($_COOKIE['language']) || $lang !== $_COOKIE['language']) {
    // setcookie('language', $lang, time() + 30000);
    setcookie('language', $lang);
}

header('Location: index.php');