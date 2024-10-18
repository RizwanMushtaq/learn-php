<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Loops in JavaScript</h2>

  <h3>for Loop</h3>
  <?php

  for ($i = 0; $i < 10; $i++) {
    echo $i;
    echo '<br>';
  }
  ?>

  <h3>while Loop</h3>
  <?php

  $count = 0;

  while ($count < 10) {
    echo $count . " Hi";
    echo '<br>';
    $count++;
  }
  ?>

  <h3>foreach Loop for Index Array</h3>
  <?php

  $fruits = ['apple', 'orange'];

  foreach ($fruits as $fruit) {
    echo $fruit;
    echo '<br>';
  }
  ?>

  <h3>foreach Loop for Associated Array</h3>
  <?php

  $tasks = ['dishes' => 'danial', 'dusting' => 'rizwan'];

  foreach ($tasks as $task => $person) {
    echo $task;
    echo ' ';
    echo $person;
    echo '<br>';
  }
  ?>
</body>

</html>