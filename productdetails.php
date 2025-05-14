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
  $imag= $row['Image'];
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <img src="Admin/<?php echo $row['Image']; ?>" width="90%">
             </div>
            </div>
        
        <div class="flex-item-r">
            <div class="wrap">
              <form method="get" action="addtocart.php">
                <p>Home /<?php echo $row['Category']; ?></p>
                <h2 style="font-weight: 530;"><?php echo $row['Name']; ?></h2>
                <h4>Product Details</h4>
                <p><?php echo $row['Description']; ?></p>
                <input type="hidden" name="id" value="<?php echo $Id;?>"></h5>
                <h2><i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;<?php echo $row['SP']; ?></h2>
                <div class="rating">
                <i class="fa-solid fa-star" style="color: #d6c638;"></i>
                <i class="fa-solid fa-star" style="color: #d6c638;"></i>
                <i class="fa-solid fa-star" style="color: #d6c638;"></i>
                <i class="fa-solid fa-star-half-stroke" style="color: #d6c638;"></i>
                </div>
                
              <div class="delivery">
                <span class="truck">
                  <i class="fa-solid fa-truck-fast"></i>
                  <span style="font-size: 14px; margin-right: 10px;">Fast Delivery</span>
                  <i class="fa-solid fa-recycle"></i>
                  <span style="font-size: 14px; margin-right: 10px;">10 Days Replacement</span><br>
                  <i class="fa-solid fa-check-double"></i>
                  <span style="font-size: 14px;">Certified Products</span>
                </span>
              </div>
             
              <p>
                <select name="quantity" id="quantity">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <button type="submit" class="btn1">Add to Cart</button>
                <button type="submit" class="btn1">Buy Now</button>
              </p>
                <h3>Available Offer's</h3>
                <p>
                  
                  <i class="fa-solid fa-tags" style="color: green;"></i> </img>UPI Payment<font style="font-size: 14px"> &nbsp;5% Cashback on Paytm</font><br>

                 <i class="fa-solid fa-tags" style="color: green;"></i>Axis Bank CardT&C<font style="font-size: 14px"> &nbsp;5% Cashback </font><br></img>

                  <i class="fa-solid fa-tags" style="color: green;"></i> </img>Bank Offer<font style="font-size: 14px"> &nbsp;Get extra 10% off HDFC(price inclusive of cashback/coupon)T&C</font><br>

                </p>
                </form>
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
      
<!-- footer --><br><br>
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