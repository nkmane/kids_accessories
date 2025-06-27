<?php
session_start();
include 'db.php'; // your DB connection file

if (isset($_GET['payment_id'])) {
    $payment_id = $_GET['payment_id'];
    $user_email = $_SESSION['user_email']; // make sure it's set at login
    $amount = 418.95; // Replace with total from cart (store in session ideally)
    $status = "Paid";
    $order_date = date("Y-m-d H:i:s");

    // Insert into orders table
    $sql = "INSERT INTO orders (user_email, order_date, payment_id, amount, status)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssds", $user_email, $order_date, $payment_id, $amount, $status);
    
    if ($stmt->execute()) {
        echo "<h2>Payment Successful!</h2>";
        echo "<p>Payment ID: $payment_id</p>";
        echo "<a href='index.php'>Back to Home</a>";
    } else {
        echo "Error storing order: " . $stmt->error;
    }
} else {
    echo "<h2>Payment Failed or Cancelled.</h2>";
}
?>
