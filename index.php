<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kids Accessories</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <!-- Header Section -->
  <header class="header">
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
        <a href="cart.php"><img src="images/cart.png" width="30" height="30"><a href="order.php"></a></a>
        <img src="images/menu.png" class="menu-icon" alt="Menu" onclick="menutoggle()">
      </div>

      <div class="row">
        <div class="col-2">
          <h1>Big Store For Little Ones</h1>
          <p>Find the cutest and safest accessories for your little ones!</p>
          <a href="product.html" class="btn">Shop Now &#8594;</a>
        </div>
        <div class="col-2">
          <img src="images/banner.jpg" alt="Banner">
        </div>
      </div>
    </div>
  </header>

  <!-- Categories Section -->
  <section class="categories">
    <div class="small-container">
      <div class="row">
        <a href="baby.php"><div class="col-3"><img src="images/baby.jpg" alt="Category"></div></a>
        <a href="girl.php"><div class="col-3"><img src="images/girl.jpg" alt="Category"></div></a>
        <a href="boy.php"><div class="col-3"><img src="images/boy.jpg" alt="Category"></div></a>
      </div>
    </div>
  </section>

  <!-- Featured Products Section -->
  <section class="products">
    <div class="small-container">
      <h2 class="title">Featured Products</h2>
      <div class="row">
        <div class="col-4">
          <a href="productdetails.html"><img src="images/hat1.jpg" alt="Product"></a>
          <a href="productdetails.html"><h4>Boys Spiderman Print Baseball Cap</h4></a>
          <p>Size : 4-12 years</p>
          <div class="rating">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
          </div>
          <p>₹999.00</p>
        </div>

        <div class="col-4">
          <a href="productdetails2.html"><img src="images/cloth4.jpg" alt="Product"></a>
          <a href="productdetails2.html"><h4>Stylish Grey Cotton Blend Kids Sweatshirt & Jogger Set</h4></a>
          <p>Size : 6-12 years</p>
          <div class="rating">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
          </div>
          <p>₹1599.00</p>
        </div>

        <div class="col-4">
          <a href="productdetails3.html"><img src="images/toys2.jpg" alt="Product"></a>
          <a href="productdetails3.html"><h4>3-in-1 Adjustable Musical Baby Walker with Push Handle and Toy Tray (Blue)</h4></a>   
          <p>Size : 1-3 years</p>
          <div class="rating">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
          </div>
          <p>₹599.00</p>
        </div>

        <div class="col-4">
          <a href="productdetails4.html"><img src="images/a1.jpg" alt="Product"></a>
          <a href="productdetails4.html"><h4>Waterproof Baby Bib with Food Catcher Pocket - Blue Bear Design</h4></a>
          <p>Size : 2-4 years</p>
          <div class="rating">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
          </div>
          <p>₹549.00</p>
        </div>
      </div>

      <h2 class="title">Latest Products</h2>
      <div class="row">
        <div class="col-4">
          <a href="product.html"><img src="images/cloth3.jpg" alt="Outfit"></a>
          <h4>Stylish Kids Outfit with Sunglasses</h4>
          <p>3–5 Years</p>
          <div class="rating">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
          </div>
          <p>₹599.00</p>
        </div>

        <div class="col-4">
          <a href="product.html"><img src="images/i9.jpg" alt="Hair Accessory"></a>  
          <h4>Butterfly Hair Accessory for Girls</h4>
          <p>Free Size</p>
          <div class="rating">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
          </div>
          <p>₹399.00</p>
        </div>

        <div class="col-4">
          <a href="product.html"><img src="images/product3.jpg" alt="Headband"></a>
          <h4>Floral Headband for Babies</h4>
          <p>0–2 Years</p>
          <div class="rating">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
          </div>
          <p>₹199.00</p>
        </div>

        <div class="col-4">
          <a href="product.html"><img src="images/bag.jpeg" alt="Bag"></a>
          <h4>Pink Kids Backpack with Flower Design</h4>
          <p>Medium</p>
          <div class="rating">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
          </div>
          <p>₹99.00</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Offer Section -->
  <section class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="images/i1.jpg" class="offer-img" alt="Offer">
        </div>
        <div class="col-2">
          <p>Accessories made for giggles, joy, and adventure!</p>
          <h1>Tiny Deals, Big Smiles!</h1>
          <small>Find the cutest, trendiest, and most affordable accessories for your little ones. Hurry up - Limited Stock!</small>
          <br><br>
          <a href="#" class="btn">Buy Now &#8594;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial -->
  <section class="testimonial">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>Customer service was friendly and quick. The products are just perfect for kids!</p>
          <div class="rating">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
          </div>
          <img src="images/customer1.jpg" alt="Customer">
          <h3>Sean Parker</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Brand Section -->
  <section class="brand">
    <div class="small-container">
      <div class="row">
        <div class="col-5"><img src="images/brand1.jpg" alt="Brand"></div>
        <div class="col-5"><img src="images/brand2.jpg" alt="Brand"></div>
        <div class="col-5"><img src="images/brand3.jpg" alt="Brand"></div>
        <div class="col-5"><img src="images/brand4.jpg" alt="Brand"></div>
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

  <!-- Toggle Menu Script -->
  <script>
    const MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
      MenuItems.style.maxHeight = MenuItems.style.maxHeight === "0px" ? "200px" : "0px";
    }
  </script>
</body>
</html>
