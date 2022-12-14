<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Available.php';

class Food extends Product
{
    use Available;

    public $expiry_date;
    public $calorie;
    public $weight;

    public function __construct(String $name, String $image, Float $price, String $category, String $description, String $expiry_date, Int $calorie, $weight)
    {
        //il parent::_constructor recupera tutti i "$this" del constructor padre
        parent::__construct($name, $image, $price, $category, $description);

        $this->expiry_date = $expiry_date;
        $this->calorie = $calorie;
        $this->weight = $weight;
    }

    //metodo per recuperare il vaore di una variabile
    public function get_weight()
    {
        return $this->weight;
    }

    //metodo per recuperare il vaore di una variabile e ci aggiungo l'unità di misura quando serve
    public function get_full_weight()
    {
        return $this->weight . 'kg';
    }

    public function get_details()
    {
        return "NAME: {$this->name} <br> PRICE: €{$this->price} <br> CATEGORY: {$this->category} <br> DESCRITPION: {$this->description} <br> EXPIRE_DATE: {$this->expiry_date} <br> WEIGHT: {$this->get_full_weight()}";
    }
}
