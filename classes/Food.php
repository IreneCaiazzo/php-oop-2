<?php
include_once __DIR__ . '/Product.php';

class Food extends Product
{
    public function __construct(
        int $id,
        string $name,
        string $description,
        int $price,
        Category $category,
        string $image,
        protected string $expiry,
        int $weight
    ) {
        parent::__construct($id, $name, $description, $price, $category, $image);
    }
}
