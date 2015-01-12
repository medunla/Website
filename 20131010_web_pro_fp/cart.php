<?php 
    include 'function/checklogin.php';
    include 'function/sql.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script type ="text/javascript" src ="assets/js/jquery-1.10.1.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script type ="text/javascript" src ="assets/js/jqueryz.js"></script> 
    <script type ="text/javascript" src ="function/sqlJs.js"></script> 
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
    <script type ="text/javascript" src ="assets/js/jquery.fancybox.js?v=2.1.5"></script>
    <link rel ="stylesheet" type="text/css" href ="assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />

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
                <li><a href="products.php">Products</a></li>
                <li class="<?= $f_lock ?>"><a href="bookmark.php">Bookmark</a></li>
                <li class="active <?= $f_lock ?>"><a href="cart.php">Cart</a></li>
                <li><a href="howto.php">How to Order</a></li>
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



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing <?= $f_lock ?>">      
        <!-- START THE FEATURETTES -->

        <div class="row featurette">
            <?php
                $sql = "SELECT * FROM cart
                INNER JOIN product ON cart.productID = product.productID
                WHERE userID = '$userID'
                ";
                $datas = sql2($sql);
    
                foreach($datas as $data) { ?>
          
                    <div class="cart">
                        <div class="col-md-7">
                            <br>
                            <h4><?= $data['productName'] ?></h4>
                            <h4><?= $data['productCost'] ?> B</h4>
                            <p><?= $data['productDescript'] ?></p>
                        </div>
                        <div class="col-md-5">
                            <img class="featurette-image img-responsive" src="<?= $data['productImg'] ?>" style="width:227px">
                            <img class="checked" src="img/edit_minus.jpg" width="30px" onclick="deleteCart('<?= $data['cartID'] ?>')" >
                            
                             <form  action="function/addOrders.php"  method="POST" enctype="multipart/form-data">
                                <input name="userID" type="text" value="<?= $userID ?>" class="hide" />
                                <input name="cartID" type="text" value="<?= $data['cartID'] ?>" class="hide" />
                                <input name="productID" type="text" value="<?= $data['productID'] ?>"  class="hide"/>
                                <input name="ordersQuantity" type="text" value="<?= $data['cartQuantity'] ?>" class="hide" />
                                <input class="order-bt" type="submit" value="Order" /> 
                            </form>
                         </div>
                       
                    </div>
            
                <?php
                } 
            ?>
        
        </div>
        <br/>
        
        <div class="price clear-b">
            <?php
                $sql2 = "SELECT * FROM cart
                INNER JOIN product ON cart.productID = product.productID
                WHERE userID = '$userID'
                ";
                $datas2 = sql2($sql2);
                $cost = 0;
                foreach($datas2 as $data) {
                    $a = $data['productCost'];
                    $b = $data['cartQuantity'];
                    $c = $a*$b;
                    $cost += $c;
                }
            ?>
                
            <h4>Total Price : <?= $cost ?> B</h4>            
        </div>
      
        <p class="clear-b"></p>
        <hr class="featurette-divider clear-b">

        <!-- /END THE FEATURETTES -->


        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.js"></script>
  </body>
</html>
