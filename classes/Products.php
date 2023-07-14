<!-- 
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
 -->

<?php 

include_once __DIR__ . '/Cat.php';
include_once __DIR__ . '/Dog.php';

class Products{
    public $game;
    public  $food;
    public $kennels;


    function __construct(String $game, String $food, String $kennels){
        $this->game = $game;
        $this->food = $food;
        $this->kennels = $kennels;

    }


}

?>