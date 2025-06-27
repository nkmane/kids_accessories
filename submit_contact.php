<?php
include 'db.php'; // Ensure this contains correct DB connection
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values and sanitize
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $subject = mysqli_real_escape_string($conn, trim($_POST['subject']));
    $message = mysqli_real_escape_string($conn, trim($_POST['message']));

    // Insert into database
    $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Error: Unable to send your message.'); window.location.href='contact.php';</script>";
    }
} else {
    // If someone accesses this directly without form submission
    header("Location: contact.php");
    exit();
}
?>
