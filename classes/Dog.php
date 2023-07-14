<!-- I prodotti saranno oltre al cibo, anche giochi, cucce, etc. -->





<?php

class DogProducts{
    public $type;
    public $name;
    public $image;



    function __construct(String $type, String $name, String $image){
        $this->type = $type;
        $this->name = $name;
        $this->image = $image;
    
    }



}





?>