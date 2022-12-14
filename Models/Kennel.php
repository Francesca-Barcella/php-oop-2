<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Available.php';

class Kennel extends Product
{

    use Available;

    public $material;
    public $length;
    public $height;


    public function __construct(String $name, String $image, Float $price, String $category, String $description, String $material, float $length, float $height,)
    {
        //il parent::_constructor recupera tutti i "$this" del constructor padre
        parent::__construct($name, $image, $price, $category, $description);

        $this->material = $material;
        $this->length = $length;
        $this->height = $height;
    }
    //recupero le singole proprietà e poi tutte insieme
    public function get_materialh()
    {
        return $this->material;
    }

    public function get_length()
    {
        return $this->length;
    }

    public function get_heightl()
    {
        return $this->height;
    }

    public function get_full_size()
    {
        return "{$this->length} x {$this->height} cm";
    }

    public function get_details()
    {
        return "NAME: {$this->name} <br> PRICE: €{$this->price} <br> CATEGORY: {$this->category} <br> DESCRIPTION: {$this->description} <br> MATERIAL: {$this->material} <br> SIZE: {$this->get_full_size()}";
    }
}
