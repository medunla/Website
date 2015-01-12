<?php include 'function/checklogin.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>UNIQLO : Register</title>

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
                <li><a href="products.php">Products</a></li>
                <li class="active <?= $f_lock ?>"><a href="bookmark.php">Bookmark</a></li>
                <li class="<?= $f_lock ?>"><a href="cart.php">Cart</a></li>
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


    <div class="container marketing">
    	<div id="regis_box">

    		<h1>Register</h1>
    		<hr>
            <form action="function/addUser.php" method="POST" enctype="multipart/form-data">
                <div class="reg_box_l"><h4>Username <span class="req">*</span></h4><input type="text" name="userUsername" ></div>  
                <div class="reg_box_r"><h4>Name <span class="req">*</span></h4><input type="text" name="userFname" ></div>  
                <div style="clear:both;"></div>
                <div class="reg_box_l"><h4>Password <span class="req">*</span></h4><input type="password" name="userPassword" ></div>
                <div class="reg_box_r"><h4>Lastname <span class="req">*</span></h4><input type="text" name="userLname" ></div>
                <div style="clear:both;"></div>
                <div class="reg_box_l"><h4>Re-type password <span class="req">*</span></h4><input type="password" name="userConPassword" ></div>
                <div class="reg_box_r"><h4>Birthday <span class="req">*</span></h4><input type="date" name="userBirth"></div>
                <div style="clear:both;"></div>
                <div class="reg_box_l"><h4>E-mail <span class="req">*</span></h4><input type="text" name="userMail" ></div>
                <div class="reg_box_r"><h4>Address <span class="req">*</span></h4><input type="text" name="userAddress" ></div>
                
                
                <div style="clear:both;"></div>
                            
                <div class="reg_box_mini"><h4>Telephone number</h4><input type="text" name="userTel" ></div>
                
                <input type="text" name="userLevel" class="hide" value="2" >
                
                
                <div style="clear:both;"></div>
                <div class="reg_box_r"><p style="font-size:10px; text-align:right; color:#7eb12c;"><br>* required fields</p></div>
                <hr>
                <div class="reg_box_l_submit"><input type="submit" name="submit_reg" value="Submit"></div>
                <div class="reg_box_c_cancel"><input type="reset" name="cancel_reg" value="Cancel"></div>
    		</form>


    	</div><!--regis_box-->


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
