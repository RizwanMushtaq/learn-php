<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $username = $_POST["username"];
  $pwd = $_POST["pwd"];

  if (empty($username) || empty($pwd)) {
    header("Location: ../index.php");
    exit();
  }

  try {
    require_once("dbh.inc.php");
    // Rather better approach is use named parameters
    $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $pwd);

    $stmt->execute();

    // Now closing the connection and free up the resources
    $pdo = null;
    $stmt = null;

    header("Location: ../index.php");

    // here you can also use exit() or die()
    // If there is no connection running use exit()
    //If some connection is already running use die()
    die();

  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }

  // always sentize data before emitting data to browser
  //echo htmlspecialchars($username);

} else {
  header("Location: ../index.php");
}