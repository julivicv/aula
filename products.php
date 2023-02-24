<?php
require("vendor/autoload.php");

$loader = new \Twig\Loader\FilesystemLoader("./templates");
$twig = new \Twig\Environment($loader);

$tamplete = $twig->load('products.html');

$product = [
    [
        'name' => 'Shoes',
        'price' => 20
    ],
    [
        'name' => 'Tshirt',
        'price' => 200
    ],
    [
        'name' => 'Shorts',
        'price' => 40
    ],
    [
        'name' => 'Carrying Bag',
        'price' => 150
    ],
];

echo $tamplete->render([
    'title' => 'Product',
    'products' => $product
]);