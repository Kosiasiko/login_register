<?php
$onRender = getenv('DB_HOST') !== false;

if ($onRender) {
    // Render → Aiven MySQL (SSL)
    $conn = mysqli_init();
    $conn->real_connect(
        getenv('DB_HOST'),
        getenv('DB_USER'),
        getenv('DB_PASS'),
        getenv('DB_NAME'),
        (int) getenv('DB_PORT'),
        NULL,
        MYSQLI_CLIENT_SSL
    );
} else {
    // Local XAMPP
    $conn = new mysqli('localhost', 'root', '1234', 'login', 3306);
}

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>