<?php
include 'navbar.php';
$Id=$_GET['id'];
$sql= "select * from product where ID=$Id";
$r= mysqli_query($con,$sql);
 
 if($row = mysqli_fetch_assoc($r)){

  $name=$row['Name'];
  $dsc= $row['Description'];
  $cat= $row['Category'];
  $rtr= $row['Rating'];
  $cp=  $row['CP'];
  $sp=  $row['SP'];
  $img= $row['Image'];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCommerce Website</title>

    <!--
      - favicon
    -->
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">
  
    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="product_details.css">
  
    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="overlay" data-overlay></div>


<!-- header -->

<br>
<!--Single Product -->
<div class="product-width">
    <div class="flex product-register">
        <div class="flex-item-l">
            <div class="wrap">
                <img src="./assets/images/gallery-1.jpg" width="100%">
             </div>
            </div>
        
        <div class="flex-item-r">
            <div class="wrap">
                <p>Home / T-shirt</p>
                <h2>Red Printed T-shirt by Hrx</h2>
                <h4>Rs. 5000.00</h4>
                <div class="rating">
                  <span class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </span>
                  <span>(5)</span>
              </div>
              <div class="delivery">
                <span class="truck">
                  <i class="fa-solid fa-truck-fast"></i>
                  <span style="font-size: 12px; margin-right: 10px;">Fast Delivery</span>
                  <i class="fa-solid fa-recycle"></i>
                  <span style="font-size: 12px; margin-right: 10px;">10 Days Replacement</span>
                  <i class="fa-solid fa-check-double"></i>
                  <span style="font-size: 12px;">Certified Products</span>
                </span>
              </div>
              <br>
              <p>
                <select name="quantity" id="quantity">
                    <option>Select Quantity</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <a href="" class="btn1">Add to Cart</a>
                <a href="" class="btn1">Buy Now</a>
              </p>
                <h3>Product Details</h3>
                <p>Give your summer wardrobe a style upgrade with Hrx Men's Active T-shirt.</p>
            </div>
          </div>
    </div>
</div>

<!-- sidenavbar -->
      <div class="sidebar  has-scrollbar" data-mobile-menu>
        <div class="sidebar-category">
          <div class="sidebar-top">
            <button class="sidebar-close-btn" data-mobile-menu-close-btn>
              <!-- <ion-icon name="close-outline"></ion-icon> -->
            </button>
          </div>
        </div>
      </div>
      
<!-- footer -->
<footer>
    <div class="footer-nav">
  
      <div class="container">
  
        <ul class="footer-nav-list">
  
          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>
  
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Fashion</a>
          </li>
  
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Electronic</a>
          </li>
  
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cosmetic</a>
          </li>
  
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Health</a>
          </li>
  
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Watches</a>
          </li>
  
        </ul>
  
        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>
  
        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>
        
        </ul>
  
        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>
  
        <ul class="footer-nav-list">
  
          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>
  
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>
  
            <address class="content">
              419 State 414 Rte
              Beaver Dams, New York(NY), 14812, USA
            </address>
          </li>
  
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>
  
            <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
          </li>
  
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
  
            <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
          </li>
  
        </ul>
  
        <ul class="footer-nav-list">
  
          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>
  
          <li>
            <ul class="social-link">
  
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
  
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
  
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
  
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
  
            </ul>
          </li>
  
        </ul>
  
      </div>
  
    </div>
  
    <div class="footer-bottom">
  
      <div class="container">
  
        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">
  
        <p class="copyright">
          Copyright &copy; <a href="#">Anon</a> all rights reserved.
        </p>
  
      </div>
  
    </div>
  </footer>
  
      <!--
    - custom js link
  -->
  <script src="script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>