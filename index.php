<?php
require_once "./classes/Product.php";
require_once "./classes/Cat.php";
require_once "./classes/Dog.php";
require_once "./db.php";

// $giacca = new Product('Giacca','','25', '6x6x8 cm', 'Stoffa 90% lana 10%', 4.1, '', false);
// $catfood = new Cat('Felix','','8.50', '32x16x10','Organico/Pesce', 3.7, '' , false);
// $dogfood = new Dog('Zooclass','','6', '40x20x12','Organico/Carne', 3.4, '' , true);

$animalProducts = array_map(function ($product) {
    $toReturn = null;
  
    if ($product["specie"] === "Gatto") {
      $toReturn = new Cat($product["nome"], $product["magazzino"], $product["prezzo"],$product["dimensioni"],$product["materiali"],$product["valutazione"],$product["specie"],$product["scontato"]);
    } else if ($product["specie"] === "Cane") {
        $toReturn = new Dog($product["nome"], $product["magazzino"], $product["prezzo"],$product["dimensioni"],$product["materiali"],$product["valutazione"],$product["specie"],$product["scontato"]);
    } else {
      $toReturn = new Product($product["nome"], $product["magazzino"], $product["prezzo"],$product["dimensioni"],$product["materiali"],$product["valutazione"],$product["specie"],$product["scontato"]);
    }

    $toReturn->setNome($product["nome"]);
    $toReturn->setMateriali($product["materiali"]);
    $toReturn->setPrezzo($product["prezzo"]);

  
    return $toReturn;
  }, $elencoProdotti);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Oop 2</title>

  <!-- Third party libraries -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>

</head>

<body>
    <div class="container-fluid mt-5 d-flex flex-wrap justify-content-around">
        <?php foreach ($animalProducts as $product){ ?>
        <div class="card mb-5 base30">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <h2 class="mx-5"><?php echo $product->getNome();?></h2>
                      <i class="fa-solid <?php echo $product->getSpecie()?> "></i>
                    </div>
                    <div class="card-text">
                        <h3>Quantità in stock: <?php
                        echo $product->getMagazzino();
                        ?> </h4> <h4>Prezzo: €<?php
                        echo $product->getPrezzo();
                        ?> </h4> <h4>Dimensioni: <?php
                        echo $product->getDimensioni();
                        ?> </h4> <h4>Materiali: <?php
                        echo $product->getMateriali();
                        ?> </h4> <h4>Valutazione: <?php
                        echo $product->getValutazione();
                        ?>/5 </h4> <h4>In sconto: <?php
                        echo $product->getScontato();
                        ?>
                    </div>
                </div>
        </div>
        <?php } ?>     
    </div>        

</body>

</html>