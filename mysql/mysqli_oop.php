<?php

$host_name = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($host_name, $username, $password);
if ($conn->connect_error){
  die("DB connection failed: " . $conn->connect_error);
}

// CREATE DATABASE
$sql = "DROP DATABASE IF EXISTS dev1;";
$sql .= "CREATE DATABASE dev1";
if ($conn->multi_query($sql) === true){
  echo "Database dev1 created successfully!";
} else {
  echo "Error creating database: " . $conn->error;
}


$conn = new mysqli($host_name, $username, $password, "dev1");
if ($conn->connect_error){
  die("DB connection failed: " . $conn->connect_error);
}

$sql = "
  CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )
";

if ($conn->query($sql)){
  echo "Table MyGuests created successfully!";
} else {
  echo 'Error creating MyGuests Table!';
}

$conn->close();

/**
 * 
 * Note: When you create a new database, 
 * you must only specify the first three arguments to 
 * the mysqli object (servername, username and password).

Tip: If you have to use a specific port, add 
an empty string for the database-name argument,
 like this: new mysqli("localhost", "username", "password", "", port)
 */
?>
