<?php
    session_start();

    //Gate
    if (!isset($_SESSION['login']) || $_SESSION['login'] !== 1) {
        header('Location: index.php');
    }

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    echo 'Felicitari';
    ?>
    <a href="logout.php">Logout</a>
