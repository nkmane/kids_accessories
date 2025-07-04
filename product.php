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
            <h1>All Products</h1>
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
                <a href="productdetails3.php"><img src="images/toys2.jpg" alt="Product"></a>
                <a href="productdetails3.php"><h4>Musical Walker (Blue)</h4></a>
                <p>Size:Kids</p>   
                  <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <p>₹1999.00</p>
              </div>

              <div class="col-4">
                <a href="productdetails4.php"><img src="images/a1.jpg" alt="Product"></a>
                <a href="productdetails4.php"><h4>Waterproof Baby Bib (Blue Deer)</h4></a> 
                <p>Size:Kids</p>  
                  <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <p>₹549.00</p>
              </div>

              <div class="col-4">
                <a href="productdetails2.php"><img src="images/cloth4.jpg" alt="Product"></a>
                <a href="productdetails2.php"><h4>Stylish Grey Cotton Blend Kids Sweatshirt & Jogger Set</h4></a>
                <p>Size:4-6 years</p>  
                  <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <p>₹599.00</p>
              </div>

              <div class="col-4">
                <a href="productdetails.php"><img src="images/hat1.jpg" alt="Product"></a>
                <a href="productdetails.php"><h4>Boys Spiderman Print Baseball Cap</h4></a>
                <p>Size:Kids</p>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <p>₹999.00</p>
              </div>

            <div class="col-4">
                <img src="images/i7.jpg" alt="Sunglasses">
                <h4>Sunglasses</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$100.00</p>
            </div>

            <div class="col-4">
                <img src="images/i4.jpg" alt="Sunglasses">
                <h4>Sunglasses</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$100.00</p>
            </div>

            <div class="col-4">
                <img src="images/product3.jpg" alt="Sunglasses">
                <h4>Sunglasses</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$100.00</p>
            </div>

            <div class="col-4">
                <img src="images/bag.jpeg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>

             <div class="col-4">
                <img src="images/baby1.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>

             <div class="col-4">
                <img src="images/baby2.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>

             <div class="col-4">
                <img src="images/baby3.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>

             <div class="col-4">
                <img src="images/baby4.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>
       
             <div class="col-4">
                <img src="images/baby5.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>

             <div class="col-4">
                <img src="images/baby6.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>
      
             <div class="col-4">
                <img src="images/baby7.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>
             
             <div class="col-4">
                <img src="images/toys11.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>

             <div class="col-4">
                <img src="images/cloth5.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>
    
             <div class="col-4">
                <img src="images/gallery5.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>
             
             <div class="col-4">
                <img src="images/i5.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>

             <div class="col-4">
                <img src="images/i6.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>

             <div class="col-4">
                <img src="images/cloth3.jpg" alt="Bag">
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>
         
             <div class="col-4">
                <img src="images/i9.jpg" alt="Bag">  images/cloth1.jpg
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>
         
             <div class="col-4">
                <img src="images/cloth1.jpg" alt="Bag">  
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
             </div>

             <div class="col-4">
                <img src="images/i15.jpg" alt="Bag">  
                <h4>Kids Bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
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
