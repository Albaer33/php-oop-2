<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/StandardUser.php';
require_once __DIR__ . '/PremiumUser.php';
require_once __DIR__ . '/GoldPremiumUser.php';

// creo classi prodotto, genero e setto i relativi codici
$prod1 = new Product('Samsung S21', 850);
$prod1->generateSetCode();

$prod2 = new Product('Manubrio moto', 225);
$prod2->generateSetCode();

$prod3 = new Product('Asus PC da gaming', 1600);
$prod3->generateSetCode();

// creo 3 classi utenti, 1 standard, 1 premium, 1 gold premium
$user1 = new StandardUser('alberto', 'lisi', 'alisi3396@gmail.com');
$user2 = new PremiumUser('marco', 'focamento', 'focamento@gmail.com');
$user3 = new GoldPremiumUser('pasquale', 'direraven', 'nonmelaricordo@gmail.com');

// aggiungo tutti i prodotti a tutti gli user
$user1->addProduct($prod1);
$user1->addProduct($prod2);
$user1->addProduct($prod3);

$user2->addProduct($prod1);
$user2->addProduct($prod2);
$user2->addProduct($prod3);

$user3->addProduct($prod1);
$user3->addProduct($prod2);
$user3->addProduct($prod3);
?>