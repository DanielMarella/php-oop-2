
<?php

class Products{

    public $title;
    public $animals;
    public $categories;


    function __construct(String $title, Animal $animals, Category $category){
        $this->title = $title;
        $this->animals = $animals;
        $this->categories = $category;
    }
}



?>
