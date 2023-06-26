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
        protected int $length,
    ) {
        parent::__construct($id, $name, $description, $price, $category, $image);
    }

    public function printCard()
    {
        return "
        <div class=\"card\">
            <img src=\"{$this->image}\" class=\"card-img-top\" alt=\"{$this->name}\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{$this->image}</h5>
                <p class=\"card-text\">{$this->description}</p>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">Dimensioni: {$this->width} x {$this->length} x {$this->height}mm</li>
            </ul>
            <div class=\"card-body\">
                <a href=\"#\" class=\"card-link\">Details</a>
            </div>
        </div>
    ";
    }
}
