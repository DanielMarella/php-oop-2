


<?php 

include_once __DIR__ . '/../classes/Categories.php';
include_once __DIR__ . '/../classes/Animals.php';
include_once __DIR__ . '/../classes/Products.php';


$categories = [
    new Category('Game'),
];

$animals = [
    new Animal('Cane'),
    new Animal('Gatto'),

];

$products = [
    new Products('Pallina', $animals[0], $categories[0]),
    
]



?>