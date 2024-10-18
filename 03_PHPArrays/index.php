<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Arrays</h2>

  <h3>Simple Array</h3>
  <?php
  $fruits = ['Apple', 'banana', 'cherry'];
  $fruits[] = 'orange';

  //unset($fruits[2]);
  
  array_splice($fruits, 0, 1);
  print_r($fruits);
  echo '<br>';

  array_push($fruits, 'Mango');
  print_r($fruits);
  ?>

  <h3>Array with specific Keys</h3>
  <?php
  $tasks = [
    'laundary' => 'Danial',
    'trash' => 'riz',
    'vacum' => 'bella',
    'dishes' => 'david',
  ];

  //echo $tasks['vacum'];
  print_r($tasks);
  echo '<br>';
  echo count($tasks);
  echo '<br>';

  //sort($tasks);
  //print_r($tasks);
  //echo '<br>';
  
  $tasks['dusting'] = 'Tara';
  print_r($tasks);
  echo '<br>';
  ?>

</body>

</html>