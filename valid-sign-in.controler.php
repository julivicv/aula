<?php
require('pdo.inc.php');
$user = $_POST['user'];
$password = $_POST['password'];

$userQuery = $pdo->prepare('SELECT * FROM usuarios WHERE username = :user AND senha = :pass');

$userQuery->bindParam(':user', $user);
$userQuery->bindParam(':pass', $password);

$userQuery->execute();

if ($userQuery->rowcount()) {
    $user = $userQuery->fetch(PDO::FETCH_OBJ);
    session_start();
    $_SESSION['auth'] = $user->nome;
    header('location: welcome.php');
    die;
} else {
    header("location: signIn.php?erro=1");
    die;
}