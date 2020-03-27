<?php

// include __DIR__ . '/../services/init.php';

if (isset($_POST['lang'])) {
    $lang = $_POST['lang'];
    setcookie('lang', $lang);
}

header('Location: ' . $_SERVER['HTTP_REFERER']);