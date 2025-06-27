<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = [
        'name' => $_POST['product_name'],
        'price' => $_POST['price'],
        'image' => $_POST['image'],
        'quantity' => $_POST['quantity'],
        'size' => $_POST['size']
    ];

    // If cart doesn't exist, create it
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if the product is already in cart
    $alreadyInCart = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['name'] == $product['name'] && $item['size'] == $product['size']) {
            $item['quantity'] += $product['quantity'];
            $alreadyInCart = true;
            break;
        }
    }

    if (!$alreadyInCart) {
        $_SESSION['cart'][] = $product;
    }

    header("Location: cart.php");
    exit();
}
?>
