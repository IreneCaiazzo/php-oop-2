<?php

class Product
{
    public function __construct(
        private int $id,
        private string $name,
        private string $description,
        private int $price,
        private Category $category,
        private string $image,
    ) {
    }
}
