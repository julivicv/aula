<?php
require("vendor/autoload.php");

$loader = new \Twig\Loader\FilesystemLoader("./templates");
$twig = new \Twig\Environment($loader);

$tamplete = $twig->load('products.html');

echo $tamplete->render([
    'title' => 'Product',
]);