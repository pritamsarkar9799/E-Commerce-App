<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eCommerce Website</title>

  <!--
    - favicon
  -->
 <!--  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon"> -->

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
  <!--
    - HEADER
  -->

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
            <b style="font-weight: 600">Free Shipping
            This Week Order Over - <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;500</b>
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


      <?php if(empty($_SESSION['Username'])){ ?>
      
          <a class="nav-link" href="signin.php" style="font-size: 16px;">SIGN IN</a>
         
     
      <?php } 
            else
            {
              ?>
              <li class="nav-item">
          <a class="logout.php" href="logout.php" style="font-size: 16px;">LOG OUT</a>
        </li>
              <?php
            }
      ?>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <img src="./assets/images/logo/logo5.png" alt="Anon's logo" width="120" height="50">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" id="secrch-item" class="search-field" placeholder="Enter your product name..." onkeyup="search()">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <!-- <a class="btn action-btn" href="signin.php">
            <ion-icon name="person-outline"></ion-icon>
          </a> -->

          <!-- <button class="action-btn" style="margin-top: 10px;">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button> 
 -->
              <button class="action-btn" style="margin-top: -30%;">
              <a href="showcart.php">
              <i class="fa-solid fa-cart-shopping" style="font-size: 24px;color: #434d46;"></i>
              
              <span style="font-size: 18px;color: black;">(<?php 
                      if(empty($_SESSION['cart_info']))
                        echo "0";
                      else
                        echo sizeof($_SESSION['cart_info']);?>)</span>
              </a></button>
  
            
        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="index.php" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Electronics</a>
                </li>

                <li class="panel-list-item">
                  <a href="smartphone.php">Smartphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="laptop.php">Laptop</a>
                </li>


                <li class="panel-list-item">
                  <a href="headphone.php">Headphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="smart-watch.php">Watches</a>
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
                  <a href="shirt.php">Shirt</a>
                </li>

                <li class="panel-list-item">
                  <a href="tshirts-jeans.php">T-shirt & jeans</a>
                </li>

                <li class="panel-list-item">
                  <a href="blazer.php">Blazer</a>
                </li>

                <li class="panel-list-item">
                  <a href="sunglasses.php">Sunglasses</a>
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
                  <a href="graphics-card.php">Graphics card</a>
                </li>

                <li class="panel-list-item">
                  <a href="keyboard.php">Keyboard</a>
                </li>

                <li class="panel-list-item">
                  <a href="mouse.php">Mouse</a>
                </li>

                <li class="panel-list-item">
                  <a href="headphone.php">Headphone</a>
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
                <a href="shirt.php">Shirt</a>
              </li>

              <li class="dropdown-item">
                <a href="tshirts-jeans.php">T-shirt & Jeans</a>
              </li>

              <li class="dropdown-item">
                <a href="blazer.php">Blazer</a>
              </li>

              <li class="dropdown-item">
                <a href="sunglasses.php">Sunglasses</a>
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
            <a href="smartphone.php" class="menu-title">Smartphone</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="smartphone.php">Redmi</a>
              </li>

              <li class="dropdown-item">
                <a href="smartphone.php">Realme</a>
              </li>

              <li class="dropdown-item">
                <a href="smartphone.php">Samsung</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="laptop.php" class="menu-title">Laptop</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="laptop.php">Dell</a>
              </li>

              <li class="dropdown-item">
                <a href="laptop.php">HP</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Gaming</a>
            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="graphics-card.php">Graphics Card</a>
              </li>

              <li class="dropdown-item">
                <a href="keyboard.php">Keyboard</a>
              </li>
              

              <li class="dropdown-item">
                <a href="mouse.php">Mouse</a>
              </li>

              <li class="dropdown-item">
                <a href="headphone.php">Headphone</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <a href="contact.php" class="menu-title">Contact</a>
          </li>

        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <!-- <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button> -->

      <a href="index.php">
        <ion-icon name="home-outline" style="color: black;"></ion-icon>
      </a>

      
        <!-- <ion-icon name="heart-outline"></ion-icon> -->
        <button class="action-btn" >
              <a href="showcart.php">
              <i class="fa-solid fa-cart-shopping" style="font-size: 24px;color: #434d46;"></i>
              
              <span style="font-size: 18px;color: black;">(<?php 
                      if(empty($_SESSION['cart_info']))
                        echo "0";
                      else
                        echo sizeof($_SESSION['cart_info']);?>)</span>
              </a></button>

      <!-- <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button> -->

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
          <a href="index.php" class="menu-title">Home</a>
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
              <a href="shirt.php" class="submenu-title">Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="tshirts-jeans.php" class="submenu-title">T-shirt & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="blazer.php" class="submenu-title">Blazer</a>
            </li>

            <li class="submenu-category">
              <a href="sunglasses.php" class="submenu-title">Sunglasses</a>
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
                  <a href="smartphone.php" class="submenu-title">Smartphone</a>
                </li>
    
                <li class="submenu-category">
                  <a href="laptop.php" class="submenu-title">Laptop</a>
                </li>
    
                <li class="submenu-category">
                  <a href="headphone.php" class="submenu-title">Headphone</a>
                </li>
    
                <li class="submenu-category">
                  <a href="smart-watch.php" class="submenu-title">Watches</a>
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
                  <a href="graphics-card.php" class="submenu-title">Graphic's Card</a>
                </li>
    
                <li class="submenu-category">
                  <a href="keyboard.php" class="submenu-title">Keyboard</a>
                </li>

                <li class="submenu-category">
                  <a href="mouse.php" class="submenu-title">Mouse</a>
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

  <!-- sidenavbar
 -->
 <div class="sidebar  has-scrollbar" data-mobile-menu>
  <div class="sidebar-category">
    <div class="sidebar-top">
      <button class="sidebar-close-btn" data-mobile-menu-close-btn>
        <!-- <ion-icon name="close-outline"></ion-icon> -->
      </button>
    </div>
  </div>
</div>



  <!--
    - custom js link
  -->

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>