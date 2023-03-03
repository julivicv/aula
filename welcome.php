<?php
require("vendor/autoload.php");
require("./valid_login.php");

$loader = new \Twig\Loader\FilesystemLoader("./templates");
$twig = new \Twig\Environment($loader);



$templete = $twig->load('welcome.html');

echo $templete->render([
    'auth' => $_SESSION['auth']
]);