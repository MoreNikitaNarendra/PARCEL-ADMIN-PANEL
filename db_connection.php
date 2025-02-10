<?php
$servername = "localhost:3306"; // Change if necessary
$username = "root"; // Change as per your DB user
$password = ""; // Change if you have a password
$database = "admin_panel"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
