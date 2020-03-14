<?php
    session_start();
    echo 'Login<pre>';
    print_r($_POST);
    echo '</pre>';

    $server_username = 'admin';
    $server_password = 'password';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($server_username === $username 
        && $server_password === $password) {
            $_SESSION['login'] = 1;
            header('Location: dashboard.php');
        } else {
            $_SESSION['error'] = 'Credentiale gresite!';
            header('Location: index.php');
        }

