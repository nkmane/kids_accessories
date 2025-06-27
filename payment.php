<?php 
include 'db.php';
session_start();

// Set total from cart or use a default fallback
$totalAmount = isset($_SESSION['total_amount']) ? $_SESSION['total_amount'] : 418.95;
$amountInPaise = $totalAmount * 100;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment - Kids Accessories</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

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
        <a href="cart.php"><img src="images/cart.png" width="30" height="30"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
      </ul>
    </nav>
  </div>
</div>

<!-- Payment Section -->
<section class="about-section">
  <h1>Proceed to Payment</h1>
  <p>You're about to complete your order securely. Click the button below to proceed with payment of ₹<?php echo number_format($totalAmount, 2); ?>.</p>
  
  <div style="text-align: center;">
    <button id="rzp-button" class="btn">Pay ₹<?php echo number_format($totalAmount, 2); ?></button>
  </div>
</section>

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

<script>
    var options = {
        "key": "rzp_test_abcd1234567890", // ✅ Your actual Razorpay Test Key
        "amount": "<?php echo (int)($amountInPaise); ?>",
        "currency": "INR",
        "name": "Kids Accessories",
        "description": "Order Payment",
        "image": "images/logo.png", // make sure the path exists
        "handler": function (response) {
            window.location.href = "success.php?payment_id=" + response.razorpay_payment_id;
        },
        "prefill": {
            "name": "Nikita",
            "email": "nikita@example.com",
            "contact": "9876543210"
        },
        "theme": {
            "color": "#ff7f50"
        }
    };
    var rzp = new Razorpay(options);
    document.getElementById('rzp-button').onclick = function (e) {
        rzp.open();
        e.preventDefault();
    }
</script>


</body>
</html>
