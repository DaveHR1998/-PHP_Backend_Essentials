<?php
// Connect without specifying the database
// $conn = new mysqli('localhost', 'root', '', '', 3307);

// Create the database
// $statement = 'CREATE DATABASE db';

// if ($conn->query($statement)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

//Close the connection
// $conn->close();

// ------------------------------------------------------------------------ //

// Reconnect with the new database to perform further operations
$conn = new mysqli('localhost', 'root', '', 'db', 3307);

// Create the table if needed
// $tableStatement = 'CREATE TABLE users (
//     id INT(30) NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(255) NOT NULL,
//     email VARCHAR(255) NOT NULL,
//     password VARCHAR(255) NOT NULL
// )';

// if ($conn->query($tableStatement)) {
//     echo "Table created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

//Close the connection
// $conn->close();
?>
