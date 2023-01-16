
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
    test
</body>

</html>

<?php
require_once "./classes/Product.php";

$prodottoa = new Product('25.00€', '6x6x8 cm', 'stoffa 90% lana 10%', '4.1');
var_dump($prodottoa);
?>
