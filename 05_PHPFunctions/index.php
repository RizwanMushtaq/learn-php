<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>PHP Functions</h2>

  <h3>sayHallo Function with strict Types</h3>
  <?php
  function sayHallo(string $name = 'Rizwan'): string
  {
    return 'Hallo ' . $name . '!';
  }

  echo sayHallo('Bella');
  ?>

</body>

</html>