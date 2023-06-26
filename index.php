<?php
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Category.php';
include_once __DIR__ . '/classes/Toy.php';
include_once __DIR__ . '/classes/Shelter.php';

$food = new Food(1, 'Croccantini', 'Cibo buono', 1000, new Category(), 'url', '2023-08-30', 300);
$toy = new Toy(2, 'gioco', 'Cibo buono', 1000, new Category(), 'url', 'plastica', 'rosso');
$shelter = new Shelter(3, 'Cuccetta', 'Cibo buono', 1000, new Category(), 'url', 500, 700, 600);

echo $food->printCard();
echo $toy->printCard();
echo $shelter->printCard();
