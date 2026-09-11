<?php
// Read credentials from environment variables with fallbacks for local development
$host = getenv('DB_HOST') ?: 'localhost';
$user = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASS') ?: ''; // XAMPP default is empty
$database = getenv('DB_NAME') ?: 'users';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>