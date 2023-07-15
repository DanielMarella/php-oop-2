


<?php 

include_once __DIR__ . '/../classes/Categories.php';
include_once __DIR__ . '/../classes/Animals.php';
include_once __DIR__ . '/../classes/Products.php';


$categories = [
    new Category('Cibo e alimentazione'),
    new Category('Ciotole e alimentatori'),
    new Category('Letti e cuccette'),
    new Category('Giocattoli interattivi'),
    new Category('Accessori per l\'igiene'),
    new Category('Abbigliamento e accessori moda'),
    new Category('Trasportini e borse da viaggio'),
    new Category('Toelettatura e cura del pelo'),
    new Category('Accessori per l\'addestramento'),
    new Category('Lettiere e materiali assorbenti'),
    new Category('Accessori per gatti'),
    new Category('Accessori per cani'),
    new Category('Snack e premi per animali'),
    new Category('Casette e rifugi'),
    new Category('Sistemi di sicurezza per animali'),
    new Category('Prodotti per la pulizia'),
    new Category('Lettoi e stuoie'),
    new Category('Guinzagli e pettorine'),
    new Category('Trattamenti antiparassitari'),
    new Category('Accessori per il tempo libero'),
    new Category('Giochi da masticare'),
    new Category('Accessori per la vita all\'aperto'),
    new Category('Prodotti per l\'igiene dentale'),
    new Category('Alimenti speciali'),
    new Category('Accessori per animali esotici'),
    new Category('Articoli per il benessere'),
    new Category('Prodotti per la toelettatura'),
    new Category('Giocattoli per interno'),
    new Category('Prodotti per il controllo degli odori'),
    new Category('Accessori per l\'allenamento'),
    new Category('Articoli per il comfort'),
    new Category('Cuscini e materassi'),
    new Category('Borse e zaini per animali'),
    new Category('Abbigliamento per cani'),
    new Category('Abbigliamento per gatti'),
    new Category('Accessori per il trasporto'),
    new Category('Prodotti per la salute'),
    new Category('Igienizzanti per le zampe'),
    new Category('Articoli per l\'educazione'),
    new Category('Prodotti per l\'alimentazione'),
    new Category('Accessori per l\'acquariofilia'),
    new Category('Accessori per rettili'),
    new Category('Accessori per animali da fattoria'),
];

$objectTitle = [
    "Ciotola per il cibo",
    "Ciotola per l'acqua",
    "Lettiera per gatti",
    "Ghiaia per acquario",
    "Terrario per rettili",
    "Letto per cani",
    "Letto per gatti",
    "Giocattoli per cani",
    "Giocattoli per gatti",
    "Pettorina per cani",
    "Collare per cani",
    "Guinzaglio per cani",
    "Cuccia per cani",
    "Cuccia per gatti",
    "Spazzola per cani",
    "Spazzola per gatti",
    "Pettine per animali",
    "Trasportino per cani",
    "Trasportino per gatti",
    "Coperta per animali",
    "Abbigliamento per cani",
    "Abbigliamento per gatti",
    "Snack per cani",
    "Snack per gatti",
    "Piume giocattolo per gatti",
    "Albero per gatti",
    "Cuccia riscaldata",
    "Lettiera per roditori",
    "Lettiera per conigli",
    "Gioco interattivo per cani",
    "Gioco interattivo per gatti",
    "Palla per cani",
    "Palla per gatti",
    "Penna laser per gatti",
    "Penna per cani",
    "Biscotti per cani",
    "Biscotti per gatti",
    "Cestino per gatti",
];


$animals = [
    new Animal('<i class="fa-solid fa-dog"></i>'),
    new Animal('<i class="fa-solid fa-cat"></i>'),

];

$products = [
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    new Products('https://source.unsplash.com/random/200x200?sig='.rand(0,100), $objectTitle[rand(0, count($objectTitle) - 1)],$animals[rand(0, count($animals) - 1)],$categories[rand(0, count($categories) - 1)], rand(1, 100)),
    
    
]



?>







