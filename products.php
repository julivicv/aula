<?php
require("vendor/autoload.php");

$loader = new \Twig\Loader\FilesystemLoader("./templates");
$twig = new \Twig\Environment($loader);

$template = $twig->load('products.html');

$products = [
    [
        'name' => 'Back Scratcher',
        'price' => 29.99,
    ],
    [
        'name' => 'Racing Kart',
        'price' => 1299.99,
    ],
    [
        'name' => 'Toilet Paper',
        'price' => 3.99,
    ],
    [
        'name' => 'Shopping Cart',
        'price' => 299.99,
    ]
];

echo $template->render([
    'title' => 'Product',
    'products' => $products
]);
