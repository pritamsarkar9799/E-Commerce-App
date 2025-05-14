<?php 

$con=mysqli_connect("localhost","root","","minorproject");
session_start();
$sql= "select * from product where Category='Keyboard' ";
$r= mysqli_query($con,$sql);
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
    <!-- <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon"> -->
  
    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="style.css">
  
    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
    <div class="overlay" data-overlay></div>


<!-- header -->
 <header>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p>
            <b>Free Shipping
            This Week Order Over - <i class="fa-solid fa-indian-rupee-sign"></i>500</b>
          </p>
        </div>

        <div class="header-top-actions">

          <!-- <select name="currency">

            <option value="usd">USD </option>
            <option value="eur">EUR</option>

          </select> -->

          <!-- <select name="language">

            <option value="en-US"></option>
            <option value="es-ES"></option>
            <option value="fr"></option>

          </select> -->

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
           <img src="./Admin/ IMG/logo/logo5.png" alt="Anon's logo" width="120" height="50">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" id="secrch-item" class="search-field" placeholder="Enter your product name..." onkeyup="search()">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <a class="btn action-btn" href="login.html">
            <ion-icon name="person-outline"></ion-icon>
          </a>

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="index.html" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Electronics</a>
                </li>

                <li class="panel-list-item">
                  <a href="smartphone.html">Smartphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="laptop.html">Laptop</a>
                </li>


                <li class="panel-list-item">
                  <a href="headphone.html">Headphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="smart-watch.html">Watches</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/electronics-banner-1.jpg" alt="headphone collection" width="250"
                      height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Men's</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Shirt</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">T-shirt & jeans</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Blazer</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Sunglasses</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Women's</a>
                </li>


                <li class="panel-list-item">
                  <a href="#">Casual</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Earrings</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Necklace</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Bags</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Gaming</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Graphics card</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Keyboard</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Mouse</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Headphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/electronics-banner-2.jpg" alt="mouse collection" width="250" height="119">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Men's</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Shirt</a>
              </li>

              <li class="dropdown-item">
                <a href="#">T-shirt & Jeans</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Blazer</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Sunglasses</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Women's</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Casual</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Necklace</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Bags</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="smartphone.html" class="menu-title">Smartphone</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="smartphone.html">Redmi</a>
              </li>

              <li class="dropdown-item">
                <a href="smartphone.html">Realme</a>
              </li>

              <li class="dropdown-item">
                <a href="smartphone.html">Samsung</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Laptop</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="laptop.html">Dell</a>
              </li>

              <li class="dropdown-item">
                <a href="laptop.html">HP</a>
              </li>

            </ul>
          </li>

        <li class="menu-category">
            <a href="#" class="menu-title">Gaming</a>
            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="graphics-card.html">Graphics Card</a>
              </li>

              <li class="dropdown-item">
                <a href="keyboard.html">Keyboard</a>
              </li>
              

              <li class="dropdown-item">
                <a href="mouse.html">Mouse</a>
              </li>

              <li class="dropdown-item">
                <a href="headphone.html">Headphone</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Contact</a>
          </li>

        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">T-shirt & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Blazer</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Sunglasses</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Casual</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Bags</a>
            </li>

          </ul>

        </li>

            <li class="menu-category">
    
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Electronics</p>
    
                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
              </button>
    
              <ul class="submenu-category-list" data-accordion>
    
                <li class="submenu-category">
                  <a href="#" class="submenu-title">Smartphone</a>
                </li>
    
                <li class="submenu-category">
                  <a href="#" class="submenu-title">Laptop</a>
                </li>
    
                <li class="submenu-category">
                  <a href="#" class="submenu-title">Headphone</a>
                </li>
    
                <li class="submenu-category">
                  <a href="#" class="submenu-title">Watches</a>
                </li>
    
              </ul>
    
            </li>

            <li class="menu-category">
    
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Gaming</p>
    
                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
              </button>
    
              <ul class="submenu-category-list" data-accordion>
    
                <li class="submenu-category">
                  <a href="#" class="submenu-title">Graphic's Card</a>
                </li>
    
                <li class="submenu-category">
                  <a href="#" class="submenu-title">Keyboard</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Mouse</a>
                </li>
    
              </ul>
    
            </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Contact</a>
        </li>

      </ul>

     
        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>
<!-- login-section -->
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
      <br><br>
<!-- Product -->
<!-- Cart Section -->


      <div class="pro1 cart">

                  <center>
                    <div class="row p-2 ">

                      <div class="headline text-center ">
                                <h2 class="pb-2 position-relative d-inline-block text-center text-3xl font-bold pt-5
                                section-title ">Keyboard</h2></div><br>

                      

                            <div class="shop-content product-list">

                              <?php
                          while ($row=mysqli_fetch_assoc($r)) 
                          { 

                                      ?>

                              <div class="product product-box col-xl-4 col-lg-3 mb-2">
                                <img src="Admin/<?php echo $row['Image']; ?>" alt="" class="product-img">
                                <h2 class="product-title"><?php echo $row['Description']; ?></h2><br>
                                <h2 class="product-title" style="font-weight: 400;"><?php echo $row['Name']; ?></h2><br><br>
                                
                                <div class="rp">
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-sharp fa-solid fa-star-half-stroke rating"></i><br>
                                <span class="price"><i class="fa-solid fa-indian-rupee-sign"></i></span>&nbsp;<?php echo $row['SP']; ?></div>
                                <i class="fa-sharp fa-solid fa-cart-plus add-cart"></i>
                              </div>
                              <?php

                        } //while loop bracket closed
                          ?>    

                        </div>

              </div>
              </div>
           </div><br><br><br>
                           

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
              27G Raja SC Mullick Road
              Garia,&nbsp;Kolkata(WB),&nbsp;700047,&nbsp;India
            </address>
          </li>
  
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>
  
            <a href="tel:+607936-8058" class="footer-nav-link">91-8420158140</a>
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