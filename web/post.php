<?php

if (isset($_POST['login']) && trim($_POST['login']) !== '') {
    $login = htmlspecialchars($_POST['login']);
    session_start();
    $_SESSION['login'] = $login;
}

header("Location: ./index.php");

