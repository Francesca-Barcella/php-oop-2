<?php

/* proprietà di porduct:
- name
- category
- image
- price
*/

class Product
{
    public $image;
    public $name;
    public $category;
    public $price;
    public $description;

    public function __construct(String $name, String $image, Int $price, String $category, String $description)
    {
        $this->image = $image;
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->description = $description;
    }
}

