<?php
include 'db.php';
session_start();

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_email'] = $user['email']; // ✅ Use correct email from DB

            // ✅ Redirect safely WITHOUT using echo before header
            header("Location: home.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password'); window.location.href='account.php';</script>";
        }
    } else {
        echo "<script>alert('User not found'); window.location.href='account.php';</script>";
    }
}
?>
