<?php
 include 'db.php';
 ?>

<!DOCTYPE HTML>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="vieport" content="width=device-width", initial-scale=1.0>
     <title>Kids Accessories-Products</title>
     <link rel="stylesheet" href="style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;
            0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">
     
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
   </div>

  <section class="contact-section">
    <div class="container">
      <h1>Contact Us</h1>
      <p>If you have any questions, feedback, or inquiries, feel free to reach out to us using the form below. We're here to help!</p>

      <form action="submit_contact.php" method="POST" class="contact-form">
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="email" name="email" placeholder="Your Email" required />
        <input type="text" name="subject" placeholder="Subject" required />
        <textarea name="message" placeholder="Your Message" rows="6" required></textarea>
        <button type="submit">Send Message</button>
      </form>
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
 