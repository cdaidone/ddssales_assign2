<?php

$server = "localhost";
$database = "carinada_ddssales";
$username = "carinada_carinad";
$password = "SANDY12";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
  echo "Error: Unable to connect to database.";
  echo "Debugging errno: " . mysqli_connect_errno();
  echo "Debugging error: " . mysqli_connect_error();
  exit;
}

?>
