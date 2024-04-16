<?php
$servername = "localhost"; // Or your host address
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (usually blank)
$database = "digitalsocialservice"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>