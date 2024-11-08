<?php
// sign_in.php

// Enable error reporting for debugging (remove this in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error]));
}

// Get POST data
$user = isset($_POST['username']) ? $_POST['username'] : '';
$pass = isset($_POST['password']) ? $_POST['password'] : '';

// Simple validation
if (empty($user) || empty($pass)) {
    echo json_encode(['status' => 'error', 'message' => 'Username and password are required.']);
    exit();
}

// Retrieve user data
$sql = "SELECT password FROM users WHERE username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        echo json_encode(['status' => 'success', 'message' => 'Sign-In Successful.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid password.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'No user found with that username.']);
}

$conn->close();
?>
