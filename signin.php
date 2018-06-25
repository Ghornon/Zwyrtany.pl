<?php

session_start();

if (!isset($_POST['login']) || !isset($_POST['password'])) {
    $_SESSION['error'] = "Błędny login lub hasło!";
    exit();
}

if ($_POST['login'] == 'root' && $_POST['password'] == 'test') {

    $_SESSION['username'] = 'root';

} else {
    $_SESSION['error'] = "Błędny login lub hasło!";
    exit();
}

?>