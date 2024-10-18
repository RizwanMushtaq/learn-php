<?php

session_start();
$_SESSION["username"] = "Rizwan";

// commands to unset one session data
// unset($_SESSION["username"]);

// commands to unset all session data
session_unset();

// command to destroy data untill user jump to another page
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Intro to Sessions in PHP</h2>

  <?php

  echo $_SESSION["username"];

  ?>

</body>

</html>