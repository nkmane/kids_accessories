<?php
include 'db.php'; // Make sure this connects to kids_new database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $product  = $_POST['product'];
    $quantity = $_POST['quantity'];
    $address  = $_POST['address'];
    $message  = $_POST['message'];

    $sql = "INSERT INTO order(name, email, phone, product, quantity, address, message)
            VALUES ('$name', '$email', '$phone', '$product', '$quantity', '$address', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Order placed successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Kids Accessories - Order</title>
     <link rel="stylesheet" href="style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
</head>
<body>

<div class="container">
    <div class="navbar">
        <a href="index.php"><div class="logo">Kids<span>Accessories</span></div></a>
    </div>
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

<section class="contact-section">
    <div class="container">
      <h1>Place Your Order</h1>
      <p>Kindly fill out the form below to place your order. We will process and ship it as quickly as possible!</p>

      <form method="POST" action="" class="contact-form">
        <input type="text" name="name" placeholder="Your Full Name" required />
        <input type="email" name="email" placeholder="Your Email" required />
        <input type="text" name="phone" placeholder="Phone Number" required />
        <input type="text" name="product" placeholder="Product Name" required />
        <input type="number" name="quantity" placeholder="Quantity" min="1" value="1" required />
        <textarea name="address" placeholder="Shipping Address" rows="3" required></textarea>
        <textarea name="message" placeholder="Additional Message (Optional)" rows="3"></textarea>
        <button type="submit">Place Order</button>
      </form>
    </div>
</section>

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

</body>
</html>
