<?php
    session_start();
    // session_unset();
    $_SESSION['login'] = 0;
    header('Location: dashboard.php');

