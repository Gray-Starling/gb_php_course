<?php

require_once 'Cart.php';
require_once "User.php";
require_once "Product.php";

$user1 = new User("Gray", "mail@mail.ru");

$prod1 = new Product("Клавиатура 1", 2000);
$prod2  = new Product("Мышь 1", 3000);
$prod3  = new Product("ВидеоКарта", 10000);
$prod4 = new Product('Набор 1', 333, [$prod1, $prod2]);

$cart = new Cart($user1);

$cart->setProduct($prod1);
$cart->setProduct($prod2);
$cart->setProduct($prod3);
$cart->setProduct($prod4);

$cart->delProduct($prod1);

print_r($cart);
