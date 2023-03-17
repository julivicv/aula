<?php
    require('pdo.inc.php');
    $user = $_POST['username'] ?? false;
    $pass = $_POST['password'] ?? false;
    $email = $_POST['email'] ?? false;
    $name = $_POST['name'] ?? false;
    $isAdmin = $_POST['isAdmin'] ?? false;

    $admin = $isAdmin == 'on' ? '1' : '0';

    if(!$user || !$pass || !$email || !$name) {
        header('location:signUp.php');
        die;
    }

    $password = password_hash($pass, PASSWORD_BCRYPT, [
        'cost' => 14
    ]);

    $insertUserQuery = $pdo->prepare('INSERT INTO usuarios (username, senha, nome, email, admin) VALUES (:user,:pass,:name,:email,:admin)');

    $insertUserQuery->bindParam(':user', $user);
    $insertUserQuery->bindParam(':pass', $password);
    $insertUserQuery->bindParam(':name', $name);
    $insertUserQuery->bindParam(':email', $email);
    $insertUserQuery->bindParam(':admin', $admin);

    $insertUserQuery->execute();

    session_start();

    $_SESSION['auth'] = $user;
    header('location: welcome.php');
    die;


