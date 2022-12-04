<?php

$host_name = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($host_name, $username, $password);
if (!$conn){
  die("DB connection failed: " . mysqli_connect_error());
}

// CREATE DATABASE
$sql = "DROP DATABASE IF EXISTS dev2;";
$sql .= "CREATE DATABASE dev2";
if (mysqli_multi_query($conn, $sql)){
  echo "Database dev2 created successfully!";
} else {
  echo "Error creating database: " . mysqli_connect_error();
}


$conn = mysqli_connect($host_name, $username, $password, "dev2");
if (!$conn){
  die("DB connection failed: " . mysqli_connect_error());
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

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully!";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

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
