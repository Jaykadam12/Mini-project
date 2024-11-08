<?php
// register.php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];

// Simple validation
if (empty($user) || empty($pass) || empty($email) || empty($phone)) {
    echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
    exit();
}

// Hash the password
$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

// Insert into database
$sql = "INSERT INTO users (username, password, email, phone_number) VALUES ('$user', '$hashed_pass', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['status' => 'success', 'message' => 'Registration Successful.']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $conn->error]);
}

$conn->close();
?>
