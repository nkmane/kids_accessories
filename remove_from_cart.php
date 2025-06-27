<?php
session_start();

if (isset($_GET['index'])) {
    $i = $_GET['index'];
    unset($_SESSION['cart'][$i]);
    $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex
}

header("Location: cart.php");
exit();
?>
