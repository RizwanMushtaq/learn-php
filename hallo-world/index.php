<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hallo PHP</title>
</head>

<body>
  <h1>Leaning PHP</h1>

  <h2>
    Variables and DataTypes
  </h2>

  <?php
  $name = "Rizwan Mushtaq";
  ?>

  <p>Hi! My name is <?php echo $name ?>, and I am learning PHP.</p>

  <h2>
    Built-In Superglobal Variables
  </h2>

  <p>
    Document Root Path is
    <?php
    $documentRootPath = $_SERVER["DOCUMENT_ROOT"];
    echo $documentRootPath
      ?>
  </p>

  <p>
    Website Details are
    <?php
    echo $_SERVER['PHP_SELF']
      ?>
  </p>

  <p>
    Server Name is
    <?php
    echo $_SERVER['SERVER_NAME']
      ?>
  </p>

  <p>
    Request Method used to fetch this page is
    <?php
    echo $_SERVER['REQUEST_METHOD']
      ?>
  </p>

  <p>
    Access "name" and "eyecolor" as Query poarams from url:
    <br>
    name:
    <?php
    echo $_GET['name'];
    ?>
    <br>
    eyeColor:
    <?php
    echo $_GET['eyeColor'];
    ?>
  </p>

  <p>
    List of BuiltIn Superglobals
    <br>
    $_SERVER[""];
    <br>
    $_GET[""];
    <br>
    $_POST[""];
    <br>
    $_REQUEST[""];
    <br>
    $_FILES[""];
    <br>
    $_COOKIE[""];
    <br>
    $_SESSION[""];
    <br>
    $_ENV[""];
  </p>
</body>

</html>