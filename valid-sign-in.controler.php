<?php
    require('pdo.inc.php');
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $userQuery = $pdo->prepare('SELECT * FROM usuarios WHERE username = :user');

    $userQuery->bindParam(':user', $user);

    $userQuery->execute();

    if ($userQuery->rowcount()) {
        $user = $userQuery->fetch(PDO::FETCH_OBJ);
        if (!password_verify($pass, $user->senha)) {
            header("location: signIn.php?erro=2");
            die;    
        }
    session_start();
    $_SESSION['auth'] = $user->nome;
    header('location: welcome.php');
    die;
    }
    else{
        header("location: signIn.php?erro=1");
        die;    
    }