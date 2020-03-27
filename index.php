<?php

$request = $_SERVER['REQUEST_URI'];

$BASE_URL = 'FIIPractic_S2/'; 

$path = str_replace($BASE_URL,'', $request);


switch ($path) {
    case '/' :
        require __DIR__ . '/app//public/index.php';
        break;
    case '' :
        require __DIR__ . '/app/public/index.php';
        break;
    case '/cart' :
        require __DIR__ . '/app/public/cart.php';
        break;
    case '/add-to-cart' :
        require __DIR__ . '/app/public/add-to-cart.php';
        break;
    case '/remove-from-cart' :
        require __DIR__ . '/app/public/remove-from-cart.php';
        break;
    case '/change-lang' :
        require __DIR__ . '/app/public/change-lang.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/app/public/404.php';
        break;
}