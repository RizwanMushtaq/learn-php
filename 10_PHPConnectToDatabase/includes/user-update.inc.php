<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $username = $_POST["username"];
  $pwd = $_POST["pwd"];
  $email = $_POST["email"];

  if (empty($username) || empty($pwd) || empty($email)) {
    header("Location: ../index.php");
    exit();
  }

  try {
    require_once("dbh.inc.php");
    // Rather better approach is use named parameters
    $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 2;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->bindParam(":email", $email);

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