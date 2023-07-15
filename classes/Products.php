
<?php

class Products{
    public $image;
    public $title;
    public $animals;
    public $categories;
    public $price;


    function __construct(String $image, String $title, Animal $animals, Category $category, Int $price){
        $this->image = $image;
        $this->title = $title;
        $this->animals = $animals;
        $this->categories = $category;
        $this->price = $price;
    }
}



?>
