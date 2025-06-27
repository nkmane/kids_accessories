<?php
$host = "localhost";     // or "127.0.0.1"
$user = "root";          // default for XAMPP
$password = "";          // default is empty in XAMPP
$database = "kids_new";  // your DB name

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
