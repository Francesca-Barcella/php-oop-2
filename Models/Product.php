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



$dogActivity = new Product('Dog Activity Flip Board', 'https://arcaplanet.vtexassets.com/arquivos/ids/265067/PHO_PRO_CLIP_32026-1_-SALL_-AWK_-V1.jpg?v=1757236810', 15, 'DogCategory', 'Activity Flip Board di Trixie è un gioco strategico per cani, particolarmente indicato per cani piccoli.');

var_dump($dogActivity);
