<?php
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Category.php';
include_once __DIR__ . '/classes/Toy.php';
include_once __DIR__ . '/classes/Shelter.php';

$food = new Food(1, 'Croccantini', 'Cibo buono', 1000, new Category(), 'url', '2023-08-30', 300);
$toy = new Toy(2, 'gioco', 'Cibo buono', 1000, new Category(), 'url', 'plastica', 'rosso');
$shelter = new Shelter(3, 'Cuccetta', 'Cibo buono', 1000, new Category(), 'url', 500, 700, 600);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio di prodotti per animali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row row-cols-3">
            <?php
            echo $food->printCard();
            echo $toy->printCard();
            echo $shelter->printCard();
            ?>
        </div>
    </div>
</body>

</html>