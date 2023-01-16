
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
    
</body>

</html>

<?php
require_once "./classes/Product.php";
require_once "./classes/Cat.php";
require_once "./classes/Dog.php";

$giacca = new Product('Giacca','','25', '6x6x8 cm', 'Stoffa 90% lana 10%', 4.1,'');
var_dump($giacca);

$catfood = new Cat('Felix','','8.50', '32x16x10','Organico/Pesce', 3.7,'');
var_dump($catfood);

$dogfood = new Dog('Zooclass','','6', '40x20x12','Organico/Carne', 3.4,'');
var_dump($dogfood);
?>
