<?php

function getProductById($products, $id) {
    foreach($products as $product) {
        if ($product->getId() === intval($id)) {
            return $product;
        }
    }
    return null;
}

function printSession() {
    echo '<hr>';
    echo '<h3> SESSION </h3>';
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
}

function printCookies() {
    echo '<hr>';
    echo '<h3> COOKIES </h3>';
    echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';
}

function buildLangForm($lang) {
    echo '<form action="change-lang.php" method="POST">';
    echo '<input type="hidden" name="lang" value="'.$lang.'">';
    echo '<button type="submit">' . $lang . '</button>';
    echo '</form>';
}