<!-- 
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
 -->

<?php 

include_once __DIR__ . '/Cat.php';
include_once __DIR__ . '/Dog.php';

class Products{
    public $categories;



    function __construct(String $categories){
        $this->categories = $categories;
    }

    public function getProducts(){
        return $categories;
    }
}

?>