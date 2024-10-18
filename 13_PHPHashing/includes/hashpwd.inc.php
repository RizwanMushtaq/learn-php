<?php

$pwdSignup = 'rizwan123';
$options = [
  'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = 'rizwan123';
if (password_verify($pwdLogin, $hashedPwd)) {
  echo "password is correct";
} else {
  echo "incorrect password";
}
