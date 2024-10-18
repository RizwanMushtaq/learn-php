<?php

// var_dump($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //Never trust data got from User. So always senitize data before doing anything with it
  $firstname = htmlspecialchars($_POST["firstname"]);
  $lastname = htmlspecialchars($_POST["lastname"]);
  $favouritePet = htmlspecialchars($_POST["favouritepet"]);

  if (empty($firstname)) {
    header("Location: ../index.php");
    exit();
  }

  echo "This is data got from user: ";
  echo "<br>";
  echo $firstname;
  echo "<br>";
  echo $lastname;
  echo "<br>";
  echo $favouritePet;

  header("Location: ../index.php");
} else {
  header("Location: ../index.php");
}
