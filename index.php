<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/StandardUser.php';
require_once __DIR__ . '/PremiumUser.php';
require_once __DIR__ . '/GoldPremiumUser.php';
require_once __DIR__ . '/UserCredentials.php';

// creo classi prodotto, genero e setto i relativi codici
try {
    $prod1 = new Product('Samsung S21', 'kamehamehaaa');
} catch (Exception $e) {
    error_log($e);
    echo('<div style="border: 3px solid black; color: red; font-size: 34px;">Manutenzione del sito in corso. il server tornerà attivo più tardi</div>');
    die();
}
$prod1->generateSetCode();

try {
    $prod2 = new Product('Manubrio moto', 225);
} catch (Exception $e) {
    error_log($e);
    echo('<div style="border: 3px solid black; color: red; font-size: 34px;">Manutenzione del sito in corso. il server tornerà attivo più tardi</div>');
    die();
}
$prod2->generateSetCode();

try {
    $prod3 = new Product('Asus PC da gaming', 1600);
} catch (Exception $e) {
    error_log($e);
    echo('<div style="border: 3px solid black; color: red; font-size: 34px;">Manutenzione del sito in corso. il server tornerà attivo più tardi</div>');
    die();
}
$prod3->generateSetCode();

// creo 3 classi utenti, 1 standard, 1 premium, 1 gold premium
$user1 = new StandardUser('alberto', 'lisi', 'alisi3396@gmail.com');
$user2 = new PremiumUser('marco', 'focamento', 'focamento@gmail.com');
$user3 = new GoldPremiumUser('pasquale', 'direraven', 'nonmelaricordo@gmail.com');

// aggiungo tutti i prodotti a tutti gli user
$user1->addProduct($prod1);
$user1->addProduct($prod2);
$user1->addProduct($prod3);
$user1_basket = $user1->getBasket();

$user2->addProduct($prod1);
$user2->addProduct($prod2);
$user2->addProduct($prod3);
$user2_basket = $user2->getBasket();

$user3->addProduct($prod1);
$user3->addProduct($prod2);
$user3->addProduct($prod3);
$user3_basket = $user3->getBasket();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SHOP</h1>

    <div class="user-basket">
        <h2><?php echo $user1->getFullName(); ?></h2>
        <?php foreach($user1_basket as $product) {?>
            <h4><?php echo $product->name; ?> - <?php echo $product->getCode(); ?></h4>
            <div>Prezzo: <?php echo $product->getPrice(); ?> Euro</div>
        <?php } ?>
        <h3>Importo totale(incluso sconto e spedizione): <?php echo $user1->getTotalPrice(); ?> Euro</h3>
    </div>

    <div class="user-basket">
        <h2><?php echo $user2->getFullName(); ?></h2>
        <?php foreach($user2_basket as $product) {?>
            <h4><?php echo $product->name; ?> - <?php echo $product->getCode(); ?></h4>
            <div>Prezzo: <?php echo $product->getPrice(); ?> Euro</div>
        <?php } ?>
        <h3>Importo totale(incluso sconto e spedizione): <?php echo $user2->getTotalPrice(); ?> Euro</h3>
    </div>

    <div class="user-basket">
        <h2><?php echo $user3->getFullName(); ?></h2>
        <?php foreach($user3_basket as $product) {?>
            <h4><?php echo $product->name; ?> - <?php echo $product->getCode(); ?></h4>
            <div>Prezzo: <?php echo $product->getPrice(); ?> Euro</div>
        <?php } ?>
        <h3>Importo totale(incluso sconto e spedizione): <?php echo $user3->getTotalPrice(); ?> Euro</h3>
    </div>
</body>
</html>