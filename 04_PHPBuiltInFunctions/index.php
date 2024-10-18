<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>String Built In Function</h3>
  <?php
  $string = "Hallo World";
  echo strlen($string);
  echo '<br>';
  echo strpos($string, 'o');
  echo '<br>';
  echo strtolower($string);
  echo '<br>';
  print_r(explode(" ", $string));
  ?>

  <h3>Math Built In Functions</h3>
  <?php
  $number = -5.5000;

  echo abs($number);
  echo '<br>';
  echo round($number);
  echo '<br>';
  echo sqrt(abs($number));
  ?>

  <h3>Array Built In Functions</h3>
  <?php
  $array = ['apple', 'banana', 'cherry'];

  echo count($array);
  echo '<br>';
  echo is_array($array);
  echo '<br>';
  array_push($array, 'melon');
  print_r($array);
  echo '<br>';
  ?>

  <h3>Date/Time Built In Functions</h3>
  <?php
  echo date('Y');
  echo '<br>';
  echo date('Y-m-d');
  echo '<br>';
  echo date('Y-m-d H:i:s');
  echo '<br>';
  echo time();
  echo '<br>';
  $date = "2020-10-17 14:44:47";
  echo strtotime($date);
  ?>
</body>

</html>