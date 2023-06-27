<?php

$categories = [
    new Category(1, 'Gatti', 'felidi'),
    new Category(2, 'Cani', 'canidi'),

];

$arrProducts = [
    new Food(1, 'Croccantini', 'Cibo buono', 1000, $categories[0], 'url', '2023-08-30', 300),
    new Toy(2, 'corda', 'Cibo buono', 1000, $categories[1], 'url', 'stoffa', 'blu'),
    new Shelter(3, 'Cuscino', 'Cibo buono', 1000, $categories[0], 'url', 500, 700, 600),
    new Toy(2, 'palla', 'Cibo buono', 1000, $categories[1], 'url', 'plastica', 'rosso'),
    new Food(1, 'scatoletta', 'Cibo buono', 1000, $categories[0], 'url', '2023-08-30', 300),
    new Shelter(3, 'Cuccetta', 'Cibo buono', 1000, $categories[1], 'url', 500, 700, 600),
];
