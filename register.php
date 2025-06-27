<?php
include 'db.php';
session_start();

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        echo "<script>alert('Username or Email already exists'); window.location.href='account.php';</script>";
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql)) {
            echo "<script>alert('Registration successful! Please login.'); window.location.href='account.php';</script>";
        } else {
            echo "<script>alert('Something went wrong'); window.location.href='account.php';</script>";
        }
    }
}
?>
