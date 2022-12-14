<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product
{
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

    public function get_details()
    {
        return "Nome: {$this->name} <br> Price: €{$this->price} <br> Category: {$this->category} <br> Description: {$this->description} <br> Materiale: {$this->material} <br> Misure: {$this->length} x {$this->height} cm";
    }
}
