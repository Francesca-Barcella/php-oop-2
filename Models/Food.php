<?php
require_once __DIR__ . '/Product.php';
class Food extends Product
{
    public $scadenza;
    public $calorie;
    public $weight;

    public function __construct(String $name, String $image, Float $price, String $category, String $description, String $scadenza, Int $calorie, $weight)
    {
        //il parent::_constructor recupera tutti i "$this" del constructor padre
        parent::__construct($name, $image, $price, $category, $description);

        $this->scadenza = $scadenza;
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
        return "Nome: {$this->name} <br> Price: €{$this->price} <br> Category: {$this->category} <br> Description: {$this->description} <br> Scadenza: {$this->scadenza} <br> Peso: {$this->get_full_weigh}";
    }
}
