<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
  'lifetime' => 1800, // 30mins in seconds
  'domain' => 'localhost', // we will point to our website
  'path' => '/', // it will point to path - here we set to all paths in our website
  'secure' => true, // it will run only in website where https connection is setup
  'httponly' => true, // it will restrict script accress from client side
]);

session_start();

if (!isset($_SESSION['last_regeneration'])) {

  session_regenerate_id(true);
  $_SESSION['last_regeneration'] = time();

} else {
  $interval = 60 * 30;

  if (time() - $_SESSION['last_regeneration'] >= $interval) {

    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
  }
}
