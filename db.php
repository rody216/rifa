<?php

session_start();

$conn = mysqli_connect(
  'us-cdbr-east-06.cleardb.net',
  'bd26ff67c67b5d',
  'ff6bbecb',
  // 'php_mysql_crud'
  'heroku_c010fa7b046c9d5'
) or die(mysqli_erro($mysqli));


// define('SERVIDOR', 'us-cdbr-east-06.cleardb.net');
// define('NOMBRE_BD', 'heroku_c010fa7b046c9d5');
// define('USUARIO', 'bd26ff67c67b5d');
// define('CLAVE', 'ff6bbecb');

// $conn = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];

// try {
//   $pdo = new PDO('mysql:host=' . SERVIDOR . ';dbname=' . NOMBRE_BD, USUARIO, CLAVE, $conn);
//   return $pdo;
// } catch (Exception $e) {
//   $respuesta = ['Error' => 'error: ' . $e->getMessage()];
//   print json_encode($respuesta);
//   die();
// }
?>