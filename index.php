<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Product.php';

// creo classi prodotto, genero e setto i relativi codici
$prod1 = new Product('Samsung S21', 850);
$prod1->generateSetCode();

$prod2 = new Product('Manubrio moto', 225);
$prod2->generateSetCode();

$prod3 = new Product('Asus PC da gaming', 1600);
$prod3->generateSetCode();

// creo 2 classi utenti, 1 standard, 1 premium, 1 gold premium

?>