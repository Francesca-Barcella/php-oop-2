<?php
require_once __DIR__ . '/Product.php';
class Food extends Product
{
    public $scadenza;
    public $calorie;

    public function __construct(String $name, String $image, Float $price, String $category, String $description, String $scadenza, Int $calorie)
    {
        parent::__construct($name, $image, $price, $category, $description);

        $this->scadenza = $scadenza;
        $this->calorie = $calorie;
    }

}
