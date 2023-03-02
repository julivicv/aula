<?php

$user = $_POST['user'];
$password = $_POST['password'];

if ($user === 'rafael' && $password = '123') {
    header('location: welcome.php');
    die;
} else {
    header('location: singIn.php?error=1');
    die;
}