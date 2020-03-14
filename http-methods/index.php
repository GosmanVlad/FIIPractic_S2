<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] === 1) {
    header('Location: dashboard.php');
}

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

?>

<p><?php echo $language; ?></p>
<a href="change-lang.php?lang=en">En</a>
<a href="change-lang.php?lang=ro">Ro</a>

<hr>
<br>

<form method="POST" action="login.php">
    <input type="text" name="username"/>
    <input type="text" name="password"/>
    <button type="submit">Login</button>
</form>

<?php 
if (isset($_SESSION['error']) && $_SESSION['error']) {
    echo '<p>'.$_SESSION['error'].'</p>';
    $_SESSION['error'] = '';
}
?>

<?php
    echo '<pre>';
    print_r($_GET);
    print_r($_POST);
    print_r($_SESSION);
    print_r($_COOKIE);
    echo '</pre>';