<?php
require_once "./classes/Product.php";
require_once "./classes/Cat.php";
require_once "./classes/Dog.php";
require_once "./db.php";

$giacca = new Product('Giacca','','25', '6x6x8 cm', 'Stoffa 90% lana 10%', 4.1, '', false);
$catfood = new Cat('Felix','','8.50', '32x16x10','Organico/Pesce', 3.7, '' , false);
$dogfood = new Dog('Zooclass','','6', '40x20x12','Organico/Carne', 3.4, '' , true);

$animalProducts = array_map(function ($product) {
    $toReturn = null;
  
    if ($product["specie"] === "Gatto") {
      $toReturn = new Cat($product["nome"], $product["categoria"], $product["prezzo"],$product["dimensioni"],$product["materiali"],$product["valutazione"],$product["specie"],$product["scontato"]);
    } else if ($product["specie"] === "Cane") {
        $toReturn = new Dog($product["nome"], $product["categoria"], $product["prezzo"],$product["dimensioni"],$product["materiali"],$product["valutazione"],$product["specie"],$product["scontato"]);
    } else {
      $toReturn = new Product($product["nome"], $product["categoria"], $product["prezzo"],$product["dimensioni"],$product["materiali"],$product["valutazione"],$product["specie"],$product["scontato"]);
    }

    $toReturn->setNome($product["nome"]);
    $toReturn->setMateriali($product["materiali"]);
    $toReturn->setPrezzo($product["prezzo"]);

  
    return $toReturn;
  }, $elencoProdotti);
  
//   var_dump($animalProducts);
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

  <!-- Css -->
  <link rel="stylesheet" href="css/style.css">

</head>

</head>

<body>
    <div class="container-fluid mt-3 d-flex flex-wrap justify-content-center">
        <?php foreach ($animalProducts as $product){ ?>
        <div class="card mb-5 base30">
                <div class="card-body">
                    <h2 class="card-title text-center"><?php echo $product->getNome();?></h2>
                    <div class="card-text">
                        <h3>Categoria: <?php
                        echo $product->getCategoria();
                        ?> </h3> <h3>Prezzo: €<?php
                        echo $product->getPrezzo();
                        ?> </h3> <h3>Dimensioni: <?php
                        echo $product->getDimensioni();
                        ?> </h3> <h3>Materiali: <?php
                        echo $product->getMateriali();
                        ?> </h3> <h3>Valutazione: <?php
                        echo $product->getValutazione();
                        ?>/5 </h3> <h3>Specie: <?php
                        echo $product->getSpecie();
                        ?> </h3> <h3>Prezzo: <?php
                        echo $product->getScontato();
                        ?>   
                    </div>
                </div>
        </div>
        <?php } ?>     
    </div>        

</body>

</html>