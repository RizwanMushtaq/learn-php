<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Operators</h2>


  <h3>String Concetenation</h3>
  <?php
  $a = 'Hallo';
  $b = 'World';
  $c = $a . ' ' . $b;

  echo $c;
  ?>

  <h3>Arithmetic operators</h3>
  <?php
  echo 1 + 2;
  ?>
  <?php
  echo 5 / 2;
  ?>

  <h3>Comparison operators</h3>
  <?php
  $a = 10;
  $b = 10;
  if ($a == $b) {
    echo 'statement is true';
  }
  ?>

  <h3>Logical operators</h3>
  <?php
  $a = 10;
  $b = 10;

  $c = 3;
  $d = 10;
  if ($a == $b or $c == $d) {
    echo 'statement is true';
  } else {
    echo 'statement is false';
  }
  ?>

  <h2>Conditions</h2>

  <h3>If else</h3>
  <?php
  $a = 10;
  $b = 10;

  $c = 3;
  $d = 10;
  if ($a == $b && $c == $d) {
    echo 'statement 1 is true';
  } else if ($c < $d) {
    echo 'statement 2 is true';
  }
  ?>

  <h3>switch statement</h3>
  <?php
  $a = 10;

  switch ($a) {
    case 1:
      echo 'first case';
      break;
    case 2:
      echo 'second case';
      break;
    default:
      echo 'default';
  }
  ?>

  <h3>match statement</h3>
  <?php
  $a = 1;

  $result = match ($a) {
    1, 3, 5 => 'Variable is odd number',
    2, 4 => 'Variable is even',
    default => 'None is true',
  };
  echo $result;
  ?>


</body>

</html>