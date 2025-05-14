<?php
include 'navbar.php';
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

<!-- login-section -->

                            

<h1 class="page-title text-center">Create An Account</h1>

<div class="page-width" >
    <div class="flex login-register">
        <div class="flex-item-l">
            <div class="wrap" style="margin-top: -2%">
                <center><h3 style="margin-bottom: 4%;">SIGN UP</h3></center>
                <div id="CustomerLoginForm" class="form-vertical">
                    <form method="post" action="u1.php">
                     
                     <input type="text" placeholder="Name"  autofocus="" name="t1" style="height: 36px;">

                     
                     <input type="email" name="t2" placeholder="Email" id="CustomerEmail"  style="height: 36px;">
                     
                   
                     <input type="text" placeholder="Address" id="" name="t3" style="height: 36px;">

                
                     <input type="text" name="t4" placeholder="Mobile-Number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" style="height: 36px;">

                     <input type="text" name="t5" placeholder="UserName" style="height: 36px;">

                     <input type="password" name="t6" placeholder="Password" id="CustomerPassword" class="" style="height: 36px;"><br>
                     
                     <div class="text-center hover-line">
                     <button type="submit" class="btn2" value="Submit">
                      Submit
                     </div>
                  </form> 
             </div>
            </div>
        </div>
    </div><br><br>
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