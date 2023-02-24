<?php
require("vendor/autoload.php");

$loader = new \Twig\Loader\FilesystemLoader("./templates");
$twig = new \Twig\Environment($loader);

$templates = $twig->load('test.html');

echo $templates->render([
    'title'=>'Hello',
    'name' => 'Jonh Does',
    'age' => 23
]);