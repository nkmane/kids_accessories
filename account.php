<?php
session_start();
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kids Accessories - Account</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    .menu-icon {
      width: 30px;
      height: 30px;
      cursor: pointer;
    }

    .account-page {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 90vh;
      background: #fce4ec;
    }

    .form-container {
      width: 350px;
      background: #fff;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 8px;
      position: relative;
      overflow: hidden;
    }

    .form-btn {
      display: flex;
      justify-content: space-around;
      margin-bottom: 20px;
    }

    .form-btn span {
      cursor: pointer;
      font-weight: 600;
      color: #555;
      padding: 10px;
    }

    #Indicator {
      width: 50%;
      height: 3px;
      background: red;
      position: absolute;
      top: 58px;
      left: 0;
      transition: 0.3s;
    }

    form {
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease;
    }

    input {
      margin: 8px 0;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .btn {
      padding: 10px;
      background: red;
      color: #fff;
      border: none;
      margin-top: 10px;
      border-radius: 25px;
      cursor: pointer;
    }

    form a {
      text-align: right;
      margin-top: 10px;
      font-size: 14px;
      color: #555;
    }

    #LoginForm, #RegForm {
      width: 100%;
      position: absolute;
      top: 90px;
    }

    #LoginForm {
      left: 0;
    }

    #RegForm {
      left: 100%;
    }
  </style>
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

  <!-- Account Page -->
  <div class="account-page">
    <div class="form-container">
      <div class="form-btn">
        <span onclick="login()">Login</span>
        <span onclick="register()">Register</span>
        <hr id="Indicator">
      </div>

      <!-- Login Form -->
      <form id="LoginForm" method="POST" action="login.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login" class="btn">Login</button>
        <a href="#">Forgot Password?</a>
      </form>

      <!-- Register Form -->
      <form id="RegForm" method="POST" action="register.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="register" class="btn">Register</button>
      </form>
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

  <!-- JS for toggle menu -->
  <script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
      if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
      } else {
        MenuItems.style.maxHeight = "0px";
      }
    }
  </script>

  <!-- JS for toggle form -->
  <script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register() {
      RegForm.style.left = "0";
      LoginForm.style.left = "-100%";
      Indicator.style.left = "50%";
    }

    function login() {
      RegForm.style.left = "100%";
      LoginForm.style.left = "0";
      Indicator.style.left = "0";
    }
  </script>
</body>
</html>
