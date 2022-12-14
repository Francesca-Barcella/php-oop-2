<?php

/* proprietà di porduct:
- name
- category
- image
- price
*/

class Product
{
    //proprietà della classe:
    public $image;
    public $name;
    public $category;
    public $price;
    public $description;

    // costruttore = funzione che si richiama quando io creo l'istanza della classe
    public function __construct(String $name, String $image, Float $price, String $category, String $description)
    {
        $this->image = $image;
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->description = $description;
    }

    //come restituire tutti i dettagli insieme -> metodo
    public function get_details(){
        return "Nome: {$this->name} <br> Price: €{$this->price} <br> Category: {$this->category} <br> Description: {$this->description}";
    }

}

