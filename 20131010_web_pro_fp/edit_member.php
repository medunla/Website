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
                <li class="active"><a href="edit_member.php">Edit User</a></li>
                <li><a href="edit_orders.php">Edit Order</a></li>
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
        
        
      <?php showUser(); ?>
        
        <br>
        <hr>
        
        <div  class="float-l clear-l">        
        <h2>Add</h2>
            <form action="function/addUser.php" method="POST" enctype="multipart/form-data">
                
                <div class="float-l">
                    <p style="margin-top:4px;">Username : </p>
                    <p style="margin-top:4px;">Password : </p>
                    <p style="margin-top:4px;">Re-Password : </p>
                    <br>
                    <p style="margin-top:4px;">Fname : </p>
                    <p style="margin-top:4px;">Lname : </p>
                    <p style="margin-top:4px;">Birthday : </p>
                    <p style="margin-top:4px;">Address : </p>
                    <p style="margin-top:4px;">Phone : </p>
                    <p style="margin-top:4px;">E-mail : </p>
                    <p style="margin-top:4px;">Level : </p>
                </div>
                <div class="float-l" style="margin-left:10px;">
                    <input type="text" name="userUsername" style="margin-bottom:5px;"><br/>
                    <input type="password" name="userPassword" style="margin-bottom:5px;"><br/>
                    <input type="password" name="userConPassword" style="margin-bottom:5px;"><br/>
                    <br/>
                    
                    <input type="text" name="userFname" style="margin-bottom:5px;"><br/>
                    <input type="text" name="userLname" style="margin-bottom:5px;"><br/>
                    <input type="date" name="userBirth" style="margin-bottom:5px;"><br/>
                    <input type="text" name="userAddress" style="margin-bottom:5px;"><br/>
                    <input type="text" name="userTel" style="margin-bottom:5px;"><br/>
                    <input type="email" name="userMail" style="margin-bottom:5px;"><br/>
                    <input type="text" name="userLevel" style="margin-bottom:5px;"><br/>
                </div>
                
                <input type="submit" value="addUser" class="float-l clear-b">
            </form>
        </div>

        <div  class="float-l clear-r"  style="margin-left:50px;">
        <h2>Edit</h2>
            <form action="function/editUser.php" method="POST" enctype="multipart/form-data">
                <div class="float-l">
                    <p style="margin-top:4px;">ID : </p>
                    <p style="margin-top:4px;">Username : </p>
                    <p style="margin-top:4px;">Password : </p>
                    <br>
                    <p style="margin-top:4px;">Fname : </p>
                    <p style="margin-top:4px;">Lname : </p>
                    <p style="margin-top:4px;">Birthday : </p>
                    <p style="margin-top:4px;">Address : </p>
                    <p style="margin-top:4px;">Phone : </p>
                    <p style="margin-top:4px;">E-mail : </p>
                    <p style="margin-top:4px;">Level : </p>
                </div>
                <div class="float-l" style="margin-left:10px;" style="margin-bottom:5px;">
                    <input type="text" name="userID-edit" id="userID-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="userUsername-edit" id="userUsername-edit" style="margin-bottom:5px;"><br/>
                    <input type="password" name="userPassword-edit" id="userPassword-edit" style="margin-bottom:5px;"><br/>
                    
                    <br/>
                    
                    <input type="text" name="userFname-edit" id="userFname-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="userLname-edit" id="userLname-edit" style="margin-bottom:5px;"><br/>
                    <input type="date" name="userBirth-edit" id="userBirth-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="userAddress-edit" id="userAddress-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="userTel-edit" id="userTel-edit" style="margin-bottom:5px;"><br/>
                    <input type="email" name="userMail-edit" id="userMail-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="userLevel-edit" id="userLevel-edit" style="margin-bottom:5px;"><br/>
                </div>
             
                <input type="submit" value="Edit" class="float-l clear-b">
            </form>
       </div>
        
        <div  class="float-l clear-r"  style="margin-left:50px;">
        <h2>Delete</h2>
            <form action="function/deleteUser.php" method="POST" enctype="multipart/form-data">
                <div class="float-l">
                    <p style="margin-top:4px;">ID : </p>
  
                </div>
                <div class="float-l" style="margin-left:10px;" style="margin-bottom:5px;">
                    <input type="text" name="userID-delete" id="userID-delete" style="margin-bottom:5px;"><br/>
                </div>
             
                <input type="submit" value="Delete" class="float-l clear-b">
            </form>
       </div>

      <p style="margin-top:30px;" class="clear-b"> </p>        
        <br><br>
        
        <!-- FOOTER -->
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
