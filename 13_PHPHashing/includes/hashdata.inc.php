<?php

// Hashing = Its fixed length data string, you have no idea what it is
// Salt = added additional input from user as to make hashing more secure

$sensitiveData = "rizwan";
$salt = bin2hex(random_bytes(16)); // generate random salt
$pepper = "ASecretPepperString";

echo "<br>" . $salt;

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

echo "<br>" . $hash;
echo "<br>";

/**-----*/


$sensitiveData = 'rizwan';
$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $storedSalt . $pepper;
$verificationHash = hash("sha256", $dataToHash);

if ($storedHash === $verificationHash) {
  echo "data are same";
  echo "<br>";
  echo $storedHash;
  echo "<br>";
  echo $verificationHash;
} else {
  echo "data are not same";
}