<?php
 include 'db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Accessories - Products</title>
    <link rel="stylesheet" href="style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30" height="30"></a>
            
            <img src="images/menu.png" class="menu-icon" alt="Menu" onclick="menutoggle()">
        </div>
    </div>




    <section class="about-section">
        <div class="container">
            <h1>About Us</h1>
            <p>Welcome to <strong>Kids Accessories</strong> – your go-to store for all the cutest and most practical accessories for kids! We believe that kids deserve quality, fun, and functional products that bring joy to both parents and children.</p>

            <div class="mission-vision">
                <div class="box">
                    <h2>Our Mission</h2>
                    <p>To provide safe, high-quality, and fun accessories that make kids smile and parents happy. We focus on creativity, durability, and affordability.</p>
                </div>
                <div class="box">
                    <h2>Our Vision</h2>
                    <p>To be a leading brand in kids' accessories by continuously innovating, listening to our customers, and making childhood more joyful and colorful.</p>
                </div>
            </div>

            <div class="team">
                <h2>Meet Our Team</h2>
                <p>We are a passionate team of designers, parents, and child experts who work together to bring your kids the best accessories in the market.</p>
            </div>
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
    

</body>
</html>
