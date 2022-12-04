<?php

$host_name = "localhost";
$username = "root";
$password = "";

// OBJECT ORIENTED APPROACH
$conn = new mysqli($host_name, $username, $password);

// check connection
if ($conn->connect_error){
  die("Connection Failed: " . $conn->connect_error);
}

// Check connection (or use)
if (mysqli_connect_error()) {
  die("Database connection failed: " . mysqli_connect_error());
}

echo "Database Connection Successful";
$conn->close();

// PROCEDURAL APPROACH
$conn = mysqli_connect($host_name, $username, $password);
if (!$conn){
  die("P Connection Failed: " . mysqli_connect_error());
}

echo "Database Connection Successful";
mysqli_close($conn);

// USING PDO (PHP Data Object) Approach
/**
 * Note: In the PDO example above we have
 *  also specified a database (myDB). 
 * PDO require a valid database to 
 * connect to. If no database is 
 * specified, an exception is thrown.
 */

try {
  $conn = new PDO("mysql:host=$host_name;dbname=testdb", $username, $password);
    // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Database Connection Successful";
} catch (PDOException $e) {
  echo "Connection Failed: " . $e->getMessage();
}

$conn = null; // closes pdo connection


?>
