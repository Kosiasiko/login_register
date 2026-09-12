<?php
session_start();
include 'connect.php';

// ─── REGISTER ────────────────────────────────────────────────
if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName  = $_POST['lName'];
    $email     = $_POST['email'];
    $password  = password_hash($_POST['password'], PASSWORD_DEFAULT);  // ✅ secure hash

    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email address already exists";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);

        if ($stmt->execute()) {
            header('Location: index.php');
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// ─── LOGIN ───────────────────────────────────────────────────
if (isset($_POST['signIn'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {   // ✅ verify hash
            session_regenerate_id(true);
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php");
            exit();
        }
    }

    echo "Not found, incorrect email or password";
}
?>