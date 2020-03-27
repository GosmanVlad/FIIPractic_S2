<?php

include __DIR__ . '/../services/init.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    $cart = $_SESSION['cart'];
    
    $cart[] = $id;
    $_SESSION['cart'] = $cart;
    
}

header('Location: '.URL.'');



