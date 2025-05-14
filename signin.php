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
    <link rel="stylesheet" href="login.css">
  
    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
</head>
<body>
    <div class="overlay" data-overlay></div>


<!-- header -->
<?php
include 'navbar.php';
?>
<!-- login-section -->


<!-- Product -->
<!-- Cart Section -->
                               


<h1 class="page-title text-center">My Account</h1>

<div class="page-width">
    <div class="flex login-register">
        <div class="flex-item-l">
            <div class="wrap">
                <h5>LOGIN</h5>
                <p>If you have an account with us, please log in.</p>
                <div id="CustomerLoginForm" class="form-vertical">
                  
                <form method="post" action="session.php">
                     
                  
                     <input type="text" name="t1" placeholder="Email" id="CustomerEmail" class="">
                     
                    
                     <input type="password" value="" name="t2" placeholder="Password" id="CustomerPassword" class="">
                     
                     <div class="text-center hover-line">
                       <button type="submit" class="btn2" >Sign In</button>
                       
                       <p><a href="#recover" id="RecoverPassword" style="color: black;">Forgot your password?</a></p>                  
                     </div>
                     </form> 
             </div>
            </div>
        </div>
        <div class="flex-item-r">
            <div class="wrap">
              <h5>NEW CUSTOMER?</h5>
              <p>Registering for this site allows you to access your order status and history. We’ll get a new account set up for you in no time. For this will only ask you for information necessary to make the purchase process faster and easier</p>
              <a href="signup.php" class="btn2">Create an account</a>      
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
<?php
include 'footer.php';
?>
  
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