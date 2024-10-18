<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Scopes in PHP</h2>

  <h3>functional and global scope</h3>
  <?php

  $test = "test";
  echo $test;
  echo "<br>";

  function myFunction()
  {
    // to access global variables inside function, use global keyword
    global $test;
    return $test;
  }

  echo myFunction();

  ?>

  <h3>Static variables concept in functions</h3>
  <?php
  function testStaticFunction()
  {
    static $StaticVar = 0;
    $StaticVar++;

    return $StaticVar;
  }

  echo testStaticFunction();
  echo "<br>";
  echo testStaticFunction();
  echo "<br>";
  echo testStaticFunction();

  ?>

  <h3>Class Scope</h3>
  <?php
  class MyClass
  {
    public $classVar = 'Hallo';

    public function myMethod()
    {
      echo $this->classVar;
    }
  }

  $myClassObject = new MyClass();
  echo $myClassObject->myMethod();
  ?>

</body>

</html>