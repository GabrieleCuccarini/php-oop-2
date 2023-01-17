<?php
require_once "./classes/Product.php";
require_once "./classes/Category.php";
require_once "./classes/Cat.php";
require_once "./classes/Dog.php";

//CATEGORIE
$gameCategory = new Category("Gioco", '<i class="fa-brands fa-playstation"></i>');
$cleanCategory = new Category("Pulizia", '<i class="fa-solid fa-shower"></i>');
$foodCategory = new Category("Cibo", '<i class="fa-solid fa-utensils"></i>');
$genericCategory = new Category("Generico", '<i class="fa-solid fa-globe"></i>');

//PRODOTTI
$costruzioni = new Product("Palla", 23, $gameCategory, 22.40, 4.2, 15);
$spazzola = new Product("Spazzola", 35, $cleanCategory, 12.70, 3.1, 0);
$filettomerluzzo = new Cat("Filetto di merluzzo", 20, $foodCategory, 14.20, 3.1, 30, 'Gatto');
$cuccia = new Dog("Cuccia per cani", 22, $genericCategory, 40.90, 4.2, 15,'Cane');
$gomitolo = new Cat("Gomitolo di lana", 50, $gameCategory, 3.60, 3.3, 0, 'Gatto');
$crocchette = new Product("Crocchette nutrienti", 30, $foodCategory, 6.50, 2.4, 30);
$tiragraffi = new Cat("Tiragraffi per gatti", 16, $gameCategory, 25.00, 1.9, 15,'Gatto');
$sprayantipulci = new Dog("Spray antipulci", 48, $cleanCategory, 6.50, 4.8, 0,'Cane','Non tossico per uomini');
$collare = new Dog("Collare per cani", 13, $genericCategory, 15.70, 3.8, 30,'Cane');

//var_dump($cleanCategory->getIcona());

$animalProducts = [
    $costruzioni, $spazzola, $filettomerluzzo, $cuccia, $gomitolo, 
    $crocchette, $tiragraffi, $sprayantipulci, $collare
];

//var_dump($animalProducts); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 3</title>

  <!-- Third party libraries -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>

</head>

<body>
  <div class="container-fluid mt-5 d-flex flex-wrap justify-content-around">
    <?php foreach ($animalProducts as $product) { ?> 
    <div class="card mb-5 base30">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mx-5"><?php echo $product->getNome();?></h2>
                <h2 class="mx-5"><?php echo $product->getCategoria()->getIcona();?></h2>
            </div>
            <div class="card-text">
                <h3>Tipo di prodotto: <?php
                echo $product->getCategoria()->getTipologia();?>

                <?php if (method_exists($product, "getSpecie")) { ?>
                <div>Da usare per: <?php echo ($product->getSpecie()) ?></div>
                <?php } ?>

                <h3>Quantità in stock: <?php
                echo $product->getMagazzino();
                ?> </h4> <h4>Prezzo: €<?php
                echo $product->getPrezzo();
                ?> </h4> <h4>Valutazione: <?php
                echo $product->getValutazione();
                ?>/5 </h4> <h4>In sconto: <?php
                echo $product->getScontato();
                ?> </h4>
            </div>
        </div>
    </div>
        <?php } ?>
  </div>        
</body>

</html>