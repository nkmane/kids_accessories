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

<!---------------------single product details-------------------------------->

<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="images/cloth4.jpg" width="100%" id="productImg">

            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="images/cloth4.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/cloth41.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/cloth42.jpg" width="100%" class="small-img">
                </div>
            </div>
        </div>
        <div class="col-2">
            <p>Home / Kids Sweatshirt & Jogger Set</p>
            <h1>Stylish Grey Cotton Blend Kids Sweatshirt & Jogger Set</h1>
            <h4>₹799.00</h4>
            <form method="post" action="add_to_cart.php">
            <input type="hidden" name="product_name" value="Waterproof Baby Bib with Food Catcher Pocket – Blue Bear Design">
            <input type="hidden" name="price" value="399">
            <input type="hidden" name="image" value="images/a1.jpg">
    
    <select name="size" required>
        <option value="">Select Size</option>
        <option>Large</option>
        <option>Medium</option>
        <option>Small</option>
    </select>
    
    <input type="number" name="quantity" value="1" min="1">
    <button type="submit" class="btn">Add To Cart</button>
</form>

            <h3>Product Details</h3>
            <p>Dress your little one in cozy comfort and style with this adorable grey two-piece outfit.
               This set includes a soft, full-sleeve sweatshirt and matching jogger pants, perfect for casual outings or indoor playtime. 
               The top features a subtle printed design on the front with trendy black and white color block details on the sleeves. 
               The joggers have an elastic waistband and cuffed ankles for a secure and snug fit, allowing easy movement for active toddlers.</p>
        </div>
    </div>
</div>

       <!--------------footer--------------------->


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

        <!-------------js for toggle menu--------------------->
        <script>
             var MenuItems = document.getElementById(MenuItems);

             MenuItems.style.maxHeight = "0px";

             function menutoggle(){
                  if(MenuItems.style.maxHeight == "0px")
                  {
                    MenuItems.style.maxHeight = "200px";
                  }
                  else
                  {
                    MenuItems.style.maxHeight = "0px";
                  }
             }
        </script>


<!-----------------js for product gallery---------------------->

<script>
    var productImg = document.getElementById("productImg");
    var smallImgs = document.getElementsByClassName("small-img");

    for (let i = 0; i < smallImgs.length; i++) {
        smallImgs[i].onclick = function () {
            productImg.src = smallImgs[i].src;
        }
    }
</script>
        
</body>
</html>