<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="includes/signup.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <br>
    <br>
    <input type="text" name="pwd" placeholder="Password">
    <br>
    <br>
    <button type="submit">Submit</button>
  </form>

  <!-- <?php
  // Procedural PHP
  $brand = "Volvo";
  $color = "Green";

  function getCarInfo($brand, $color)
  {
    return "Brand: " . $brand . "<br>" . "Color: " . $color . "";
  }

  echo getCarInfo($brand, $color);
  ?> -->

  <!--  // Accessing Class in another php file
  <?php

  require_once "classes/Car.php";

  $car01 = new Car('BMW');
  $car01->setBrand('New Volvo');
  $car01->setColor('blue');

  echo $car01->getBrand();
  echo "<br>";
  echo $car01->getColor();
  ?> -->

</body>

</html>