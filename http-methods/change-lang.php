<?php

$lang = 'ro';

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

setcookie('language', $lang);

header('Location: index.php');