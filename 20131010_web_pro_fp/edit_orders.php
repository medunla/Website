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
    <script type="text/javascript">
      $(document).ready(function() {

        $('.fancybox').fancybox();

        $(".editMem").click(function() {
          $.fancybox.open({
            href : 'iframe2.html',
            type : 'iframe',
            padding : 20
          });
        });
      });
    </script>
    <link href="assets/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body class="<?= $admin_lock ?>">
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
              <a class="navbar-brand" href="admin.php">UNIQLO</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="admin.php">Home</a></li>
                <li><a href="edit_product.php">Edit Product</a></li>
                <li><a href="edit_member.php">Edit User</a></li>
                <li class="active"><a href="edit_orders.php">Edit Order</a></li>
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

      <!-- Three columns of text below the carousel -->
      <?php showOrders(); ?>
        <br>
        <hr>
        
        <div id="orders-edit" class="float-l clear-l">
        <h2>Edit</h2>
            <form action="function/editOrders.php" method="POST" enctype="multipart/form-data">
                <div class="float-l">
                    <p style="margin-top:4px;">ID : </p>
                    <p style="margin-top:4px;">Product ID : </p>
                    <p style="margin-top:4px;">Quantity : </p>
                    <p style="margin-top:4px;">User ID : </p>
                </div>
                <div class="float-l" style="margin-left:10px;">
                    <input type="text" name="ordersID-edit" id="ordersID-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="productID-edit" id="productID-edit-o" style="margin-bottom:5px;"><br/>
                    <input type="text" name="ordersQuantity-edit" id="ordersQuantity-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="userID-edit" id="userID-edit" style="margin-bottom:5px;"><br/>
                </div>
                
                <input type="submit" value="Edit"  class="float-l clear-b">
            </form>
	   </div>
    
        <div id="orders-delete" class="float-l clear-r" style="margin-left:50px;">
        <h2>Delete</h2>
            <form action="function/deleteOrders.php" method="POST" enctype="multipart/form-data">
                <div class="float-l">
                    <p style="margin-top:4px;">ID : </p>
                </div>
                <div class="float-l" style="margin-left:10px;">
                    <input type="text" name="ordersID-delete" id="ordersID-delete" style="margin-bottom:5px;"><br/>
                </div>
                <input type="submit" value="Delete" class="float-l clear-b">
            </form>
	   </div>
       
        <p style="margin-top:30px;" class="clear-b"> </p>        
        <br><br>
        
        <!-- FOOTER -->
        <footer class="clear-b">
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
