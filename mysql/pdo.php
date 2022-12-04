<?php

$host_name = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$host_name;", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // begin the transaction
  $conn->beginTransaction();
  // Our SQL statement
  $conn->exec("DROP DATABASE IF EXISTS dev3;");
  $conn->exec("CREATE DATABASE dev3;");

  // CREATE DATABASE
  $conn->commit();
  echo "PDO Database created successfully!!";
} catch (Exception $e) {
  $conn->rollBack();
  echo "Failed: " . $e->getMessage();
}

$conn = null;

?>
