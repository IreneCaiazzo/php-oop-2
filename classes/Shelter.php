<?php
include_once __DIR__ . '/Product.php';

class Shelter extends Product
{
    public function __construct(
        int $id,
        string $name,
        string $description,
        int $price,
        Category $category,
        string $image,
        private int $height,
        private int $width,
        private int $lenght,
    ) {
        parent::__construct($id, $name, $description, $price, $category, $image);
    }
}
