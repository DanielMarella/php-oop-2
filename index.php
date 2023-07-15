

<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->



<?php
    include_once __DIR__ . '/db/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>ShopOnline</title>
</head>
<body>

    <div class="container">
        <div class="row">
            
            <?php foreach ($products as $product) {?>
            <div class="card col-3 p-0 m-3 w-25" >
                <div class="card-header">
                    <img src="<?php echo $product->image ?>"  class="card-img-top  rounded-0" alt="<?php echo $product->title; ?>">
                    <h2>
                        <?php echo $product->title?>
                    </h2>
                </div>
                <div class="card-body p-3">
                    <h5 class="card-title">
                        <p>Categoria:
                        <?php echo $product->categories->name; ?>
                        </p>
                    </h5>
                    <h5 class="card-subtitle mb-2 text-muted">
                        <p>Animale:
                            <?php echo $product->animals->type; ?>
                        </p>
                    </h5>
                    <h5 class="card-subtitle mb-2 text-muted">
                        <p>Prezzo:
                            <?php echo $product->price . "€" ;?> 
                        </p>
                    </h5>
                </div>
            </div>
            <?php } ?>   
        </div>
    </div>

</body>
</html>