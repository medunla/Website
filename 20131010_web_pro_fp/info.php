<?php 
    include 'function/checklogin.php';
    include 'function/sql.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>UNIQLO</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">UNIQLO</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="products.php">Products</a></li>
                <li class="<?= $f_lock ?>"><a href="bookmark.php">Bookmark</a></li>
                <li class="<?= $f_lock ?>"><a href="cart.php">Cart</a></li>
                <li><a href="howto.html">How to Order</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="rg-bt <?= $l_lock ?>"><a href="register.php">Register</a></li>
                <li class="li-bt <?= $l_lock ?>"><a href="login.php">Login</a></li>
                  
                <li class="<?= $f_lock ?>"><a style="color:white; font-size:10px;"><em><u>Hello : <?= $userUsername ?></u></em></a></li>            
                <li class="li-bt <?= $f_lock ?>"><a href="function/logout.php">Logout</a></li> 
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
      
      
    <div class="container marketing">
        <?php
            $productID = $_GET['q'];
            $sql = "SELECT * FROM product
            WHERE productID = '$productID'
            ";        
            $datas = sql2($sql);
            
            foreach($datas as $data) { ?>
        
                <div id="info_box">
                    <div class="info_left">
                        <h3 name="itemName"><?= $data['productName'] ?></h3>
                    
                        <div><img src="<?= $data['productImg'] ?>" width="548px"/></div>
                    
                    </div>
                    
                    <div class="info_right">
                        <h4>Product Information</h4><br>
                        <p name="itemID">ID : <?= $data['productID'] ?></p>
                        <p name="itemQty"><b>In stock : <?= $data['productQuantity'] ?> ea</b></p>
                        <p name="itemBand">Band : <?= $data['productBrand'] ?></p>
                        <p name="itemDescript">Descript : <?= $data['productDescript'] ?></p>
                        <p name="itemBrochore">Brochore : <a href="<?= $data['productBrochore'] ?>">download</a></p>
                        <p class="pricez" name="itemPrice">Price : <?= $data['productCost'] ?> ฿</p>
                        <p></p>
                    </div>
                    
                    <div class="info_right_order <?= $l_lock ?>" style="margin-top:30px;">
                        <h4>Order now</h4>
                        <input class="submit_order" type="submit" value="ADD TO CART"/> 
                        <p></p>
                    </div>
                    
                    <div class="info_right_order <?= $f_lock ?>" style="margin-top:30px;">
                        <h4>Order now</h4>
                        <form action="function/addCart.php" method="POST" enctype="multipart/form-data">
                            <input class="hide" name="productID" type="text" value="<?= $data['productID'] ?>" />
                            <input class="hide" name="userID" type="text" value="<?= $userID ?>" />
                            <input  type="number" name="cartQuantity" value="1"/>
                            <input class="submit_order" type="submit" value="ADD TO CART"/>
                        </form>
                        <p></p>
                    </div>          
                  
                    
                </div>
            <?php
            }
        ?>


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.js"></script>
  </body>
</html>
