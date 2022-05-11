<?php

require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/CreditCard.php';

$crocchette = new Food ("vital plus", 2, "crocchette per cani", 25.00, "purina", "manzo e riso");
$card = new Creditcard(447545489545495, 2026, 120.00);
$user = new User('Luca', 'Perini', true , 20, $card);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-OOP-2</title>
</head>
<body>
    <div>
        <h2>Ordine Cliente: <?= $user->getFirstName(). ' ' . $user->getLastName() ?></h2>
        <p>Prodotto: <?= $crocchette->getName();?></p>
        <p>Marca: <?= $crocchette->getBrand();?></p>
        <p>Quantità: <?= $crocchette->getQuantity();?></p>
        <p>Ingredienti: <?= $crocchette->getIngredients();?></p>
        <p>Categoria: <?= $crocchette->getCategory();?></p>
        <p>Prezzo: <?= $crocchette->getPrice();?></p>
        <p>Cliente registrato: <?= $user->getIsRegistered();?></p>
        
        <h2> Transazione ordine </h2>
        <p><?= $user->buyProduct($crocchette);?></p>
        
    </div>
</body>
</html>