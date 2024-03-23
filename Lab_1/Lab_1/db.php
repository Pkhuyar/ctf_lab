<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "mysql"; // Ensure this matches the service name in docker-compose
$username = "raj";
$password = "raj";
$database = "ctf_lab";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>