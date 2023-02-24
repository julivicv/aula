<?php
require("vendor/autoload.php");

$loader = new \Twig\Loader\FilesystemLoader("./templates");
$twig = new \Twig\Environment($loader);

$tamplete = $twig->load('test.html');

echo $tamplete->render([
    'title'=>'Hello',
    'name' => 'Jonh Does',
    'age' => 23
]);