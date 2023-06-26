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
        protected int $height,
        protected int $width,
        protected int $lenght,
    ) {
        parent::__construct($id, $name, $description, $price, $category, $image);
    }

    public function printCard()
    {
        return 'sono la card cuccia' . ' ' . $this->name . '<br>';
    }
}
