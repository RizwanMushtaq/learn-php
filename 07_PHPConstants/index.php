<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Constants in PHP</h2>

  <?php

  define("AUTHOR", "Rizwan");
  echo AUTHOR;
  echo "<br>";

  // Its not possible to reassign value to constants
  // define("AUTHOR", "RizwanMus");
  
  // accessing Constants inside functions is possible
  function testConstant()
  {
    echo AUTHOR;
  }

  testConstant();
  ?>

</body>

</html>