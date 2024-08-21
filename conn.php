<?php

// Database connection settings
$servername = "localhost";  // Hostname of the database server
$username = "username";         // Database username
$password = "password";     // Database password

try {
    // Create a new PDO instance to connect to the MySQL database
    $conn = new PDO("mysql:host=$servername;dbname=crud_example", $username, $password);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // If the connection is successful, this line will be executed
} catch (PDOException $e) {
    // If there is an error in the connection, it will be caught here
    echo "Connection failed: " . $e->getMessage();
}

?>
