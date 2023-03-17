<?php
require("vendor/autoload.php");

$loader = new \Twig\Loader\FilesystemLoader("./templates");
$twig = new \Twig\Environment($loader);

$tamplete = $twig->load('register.html');

$error = $_GET['error'] ?? false;


echo $tamplete->render([
    'error' => $error
]);