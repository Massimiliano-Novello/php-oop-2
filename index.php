<?php

require_once __DIR__ . "/models/prodotti.php";
require_once __DIR__ . "/models/giochi.php";
require_once __DIR__ . "/models/categorie.php";
require_once __DIR__ . "/models/accessori.php";
require_once __DIR__ . "/models/cibo.php";

$categorie = [
    'cane' => new Categorie("cane"),
    'gatto' => new Categorie("gatto"),
];

// var_dump($categorie);


$prodotti = [
    new cibo ("cibo in scatola", 2.99, $categorie["cane"], "pollo e tacchino", "2 kg", "https://www.myjack.it/wp-content/uploads/2019/08/Migliorcane-Alimento-Completo-per-Cani-Bocconi-con-Pollo-e-Tacchino-1250-gr-0.jpg"),
    new cibo ("cibo in scatola", 3.99, $categorie["cane"], "salmone e ribes", "1.5 kg", "https://labottegadelpet.it/wp-content/uploads/2021/07/cibo-umido-in-scatola-per-cani-monoroteico-salmone-ribes-pura-natura-dalla-grana1.jpg"),
    new giochi ("topo di peluche", 0, $categorie["gatto"], "morbido", "20 cm", "https://www.loradeglianimali.it/36653/trixie-topo-peluche-da-10-cm-per-gatti.jpg"),
    new accessori ("cuccia", 29.99, $categorie["gatto"], "tessuto", "60 cm",  "https://cdn.shopify.com/s/files/1/0278/3215/6234/products/cuscino-grigio-chiaro-media-50cm-la-piu-scelta-29-90-cuscino-nuvola-cuccia-per-gatti-cani-morbida-e-pelosa-cuscino-nuvola-miglior-cuccia-per-gatti-gatto-con-personalita-28142940586058.jpg?v=1628147597"),
];

// var_dump($prodotti);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Negozio di Animali </h1>
            <h3>I nostri prodotti</h3>
        </div>

        <div class="row">
            
            <?php 
            foreach ($prodotti as $item) {
            ?>
            <div class="col-3">
                <div class="card">
                    <img src="<?php echo $item->immagine ?>" class="card-img-top image" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item->nome ?></h5>
                        <p class="card-text">
                        <?php try{
                            echo $item->getPrice();
                        } catch(Exception $err){
                           echo $err->getMessage();
                        }?></p>
                        <p class="card-text"><?php echo $item->categorie->nome ?></p>
                        <?php  if (get_class($item) == "cibo") { ?>
                            <p class="card-text"><?php echo $item->ingredienti; ?></p>
                            <p class="card-text"><?php echo $item->peso; ?></p>
                        <?php } ?>
                        <?php  if (get_class($item) == "giochi") { ?>
                            <p class="card-text"><?php echo $item->caratteristiche; ?></p>
                        <?php } ?>
                        <?php  if (get_class($item) == "accessori") { ?>
                            <p class="card-text"><?php echo $item->materiale; ?></p>
                        <?php } ?>
                        <?php  if (get_class($item) == "giochi" || get_class($item) == "accessori" ) { ?>
                            <p class="card-text"><?php echo $item->dimensioni; ?></p>
                        <?php } ?>


                        
                    </div>
                </div>
            </div>
             <?php
                
            }
            ?>
        </div>
    </div>
</body>
</html>

