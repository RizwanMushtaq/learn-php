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

    //This is bad way to intereact with database
    //$query = "INSERT INTO users (username, pwd, email) VALUES ($username, $pwd, $email);";

    //Rather we will use prepare staements method to intrertact with database
    //Here we are using non-name parameters
    //$query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
    //$stmt = $pdo->prepare($query);

    //Okay now I will give data to database
    //$stmt->execute([$username, $pwd, $email]);


    // Rather better approach is use named parameters
    $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
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