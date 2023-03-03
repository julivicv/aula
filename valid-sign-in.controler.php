<?php
$user = $_POST['user'];
$password = $_POST['password'];

if ($user === 'rafael' && $password = '123') {
    session_start();
    $_SESSION['auth'] = $user;
    header('location: welcome.php');
    die;
} else {
    header("location: signIn.php?erro=1");
    die;
}