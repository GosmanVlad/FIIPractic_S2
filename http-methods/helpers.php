<?php

function getLanguageTrans() {
    $lang = 'ro';
    if (isset($_COOKIE['language'])) {
        $lang = $_COOKIE['language'];
    }

    $language = '';
    if ($lang === 'ro') {
        $language = 'Limba:';
    } else {
        $language = 'Language:';
    }

    return $language;
}
