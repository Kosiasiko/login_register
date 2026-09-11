<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');
$port = (int) getenv('DB_PORT'); // Fetch the custom port from Render Env Vars

// Initialize and enforce SSL
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

// Pass the port as the 6th argument and MYSQLI_CLIENT_SSL as the 8th
$conn->real_connect($host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>