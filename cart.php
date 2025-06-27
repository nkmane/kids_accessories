<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart | Kids Accessories</title>
    <link rel="stylesheet" href="style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .cart-page h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .btn-checkout {
            display: block;
            width: fit-content;
            margin: 30px auto;
            background: #ff523b;
            color: #fff;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 500;
            transition: background 0.3s ease;
        }

        .btn-checkout:hover {
            background: #d84315;
        }

        .empty-msg {
            text-align: center;
            font-size: 18px;
            padding: 20px;
            color: #777;
        }

        .page-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
        }
    </style>
</head>
<body>

<div class="page-wrapper">
    <!-- Header -->
    <div class="container">
        <div class="navbar">
            <a href="index.php"><div class="logo">Kids<span>Accessories</span></div></a>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30" height="30"></a>
            <img src="images/menu.png" class="menu-icon" alt="Menu" onclick="menutoggle()">
        </div>
    </div>

    <!-- Main Cart Content -->
    <div class="main-content">
        <div class="container cart-page">
            <h2>Your Cart</h2>
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $total = 0;
                if (!empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $index => $item) {
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                        echo "<tr>
                                <td><img src='{$item['image']}' width='80'> {$item['name']}</td>
                                <td>{$item['size']}</td>
                                <td>{$item['quantity']}</td>
                                <td>₹{$item['price']}</td>
                                <td>₹" . number_format($subtotal, 2) . "</td>
                                <td><a href='remove_from_cart.php?index=$index' class='remove-btn'>Remove</a></td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='empty-msg'>Your cart is empty.</td></tr>";
                }
                ?>
                </tbody>
            </table>

            <?php if (!empty($_SESSION['cart'])): ?>
                <div class="total-price">
                    <table>
                        <tr><td>Subtotal</td><td>₹<?php echo number_format($total, 2); ?></td></tr>
                        <tr><td>Tax (5%)</td><td>₹<?php echo number_format($total * 0.05, 2); ?></td></tr>
                        <tr><td><strong>Total</strong></td><td><strong>₹<?php echo number_format($total + ($total * 0.05), 2); ?></strong></td></tr>
                    </table>
                </div>
                <a href="payment.php" class="btn-checkout">Pay Now</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-col">
                <h4>Shop</h4>
                <ul>
                    <li><a href="#">Clothing</a></li>
                    <li><a href="#">Toys</a></li>
                    <li><a href="#">School Supplies</a></li>
                    <li><a href="#">Gifts</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Parenting</h4>
                <ul>
                    <li><a href="#">Pregnancy Tips</a></li>
                    <li><a href="#">Toddler Care</a></li>
                    <li><a href="#">Growth Tracker</a></li>
                    <li><a href="#">Coloring Pages</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Return Policy</a></li>
                    <li><a href="#">Shipping Info</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Connect</h4>
                <ul class="social-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">YouTube</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Kids Accessories. All rights reserved.</p>
        </div>
    </footer>
</div>

<!-- Toggle Menu Script -->
<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    function menutoggle() {
        if (MenuItems.style.maxHeight === "0px") {
            MenuItems.style.maxHeight = "200px";
        } else {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>

</body>
</html>
