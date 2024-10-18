<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $username = $_POST["username"];

  if (empty($username)) {
    header("Location: ../searchUser.php");
    exit();
  }

  try {
    require_once("includes/dbh.inc.php");

    // Rather better approach is use named parameters
    $query = "SELECT * FROM comments WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);

    $stmt->execute();

    // fetch data as associated array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Now closing the connection and free up the resources
    $pdo = null;
    $stmt = null;

    //header("Location: ../index.php");

    // here you can also use exit() or die()
    // If there is no connection running use exit()
    //If some connection is already running use die()
    //die();

  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }

} else {
  header("Location: ../searchUser.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Thius is our Seach Result</h2>

  <?php

  if (empty($results)) {
    echo "<div>
        <p>There were no results found.</p>
    </div>";
  } else {
    foreach ($results as $row) {
      echo htmlspecialchars($row["username"]);
      echo htmlspecialchars($row["comment_text"]);
      echo htmlspecialchars($row["created_at"]);
    }
  }
  ?>
</body>

</html>