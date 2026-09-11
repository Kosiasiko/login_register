<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');
$port = (int) getenv('DB_PORT');

$conn = mysqli_init();

// Point to the CA certificate file you downloaded from Aiven
// You must upload this ca.pem file to your Render project root and push it
$ca_path = __DIR__ . '/ca.pem'; 

mysqli_ssl_set($conn, NULL, NULL, $ca_path, NULL, NULL);

$conn->real_connect($host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>