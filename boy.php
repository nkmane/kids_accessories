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

    <!-- Product Section -->
    <div class="small-container">
        <div class="row-2">
            <h1>Boys' Wardrobe</h1>
            <select>
                <option>Default Sorting</option>
                <option>Sort by price</option>
                <option>Sort by popularity</option>
                <option>Sort by rating</option>
                <option>Sort by sale</option>
            </select>
        </div>

        <div class="row">
            <!-- Product Card Template -->
            <div class="col-4">
                <img src="images/boy1.jpg" alt="Beige Sandals">
                <h4>Beige Sandals</h4>
                <p>Size: 3-8 years</p>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₹899.00</p>
            </div>

            <div class="col-4">
                <img src="images/boy2.jpg">
                <h4>Red Shirt Set</h4>
                <p>Size: 2-5 years</p>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₹699.00</p>
            </div>

            <div class="col-4">
                <img src="images/boy3.jpg">
                <h4>White Floral Shirt & Navy Pants Set</h4>
                <p>Size: 4-5 years</p>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>₹849.00</p>
            </div>

            <div class="col-4">
                <img src="images/boy4.jpg">
                <h4>Light Blue Shorts & White T-shirt Set</h4>
                <p>Size: 3-5 years</p>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₹805.00</p>
            </div>
            <div class="col-4">
                <img src="images/boy6.jpg">
                <h4>Printed Shirt with Brown Shorts Set</h4>
                <p>Size: 3-5 years</p>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₹899.00</p>
            </div>
            <div class="col-4">
                <img src="images/boy7.jpg">
                <h4>White & Red Casual Sneakers</h4>
                <p>Size:  2–6 years</p>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₹800.00</p>
            </div>
       
        <div class="col-4">
            <img src="images/boy8.jpg">
            <h4>Maroon Jacket with Grey Tee and Pants Set</h4>
            <p>Size:   5–8 years</p>
            <div class="rating">
                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹1000.00</p>
        </div>
        <div class="col-4">
            <img src="images/boy9.jpg">
            <h4>Brown Open-Toe Sandals</h4>
            <p>Size:   1–4 years</p>
            <div class="rating">
                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹999.00</p>
        </div>
         
        <div class="col-4">
            <img src="images/boy10.jpg">
            <h4>Orange Dinosaur Printed T-shirt & Shorts Set (Set 1)</h4>
            <p>Size:   1–4 years</p>
            <div class="rating">
                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹1111.00</p>
        </div>
        <div class="col-4">
            <img src="images/boy11.jpg">
            <h4>Orange Dinosaur Printed T-shirt & Shorts Set (Set 2)</h4>
            <p>Size : 1–5 years</p>
            <div class="rating">
                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹999.00</p>
        </div>
        <div class="col-4">
            <img src="images/boy11.jpg">
            <h4>Orange Dinosaur Printed T-shirt & Shorts Set (Set 2)</h4>
            <p>Size : 3–5 years</p>
            <div class="rating">
                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹1012.00</p>
        </div>
        <div class="col-4">
            <img src="images/boy12.jpg">
            <h4>Yellow Bear T-shirt with Blue Pants Set</h4>
            <p>Size :  2–4 years</p>
            <div class="rating">
                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹999.00</p>
        </div>
    </div>
    </div>
        </div>
        </div>

        
    
    

        <!-- Pagination -->
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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

    <!-- JavaScript for Toggle Menu -->
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
