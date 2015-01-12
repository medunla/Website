<?php
    include 'function/checklogin.php';
    include 'function/sql.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script type ="text/javascript" src ="assets/js/jquery-1.10.1.min.js"></script>
    <!--<script src="assets/js/jquery.js"></script>-->
    <!--<script type ="text/javascript" src ="assets/js/jqueryz.js"></script>-->
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
                <li class="active"><a href="edit_product.php">Edit Product</a></li>
                <li><a href="edit_member.php">Edit User</a></li>
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
    
        <div class="additem"><input type="button" name="addItem" value="+ Add product"/></div>
                
        <br/>        
        <?php
            $sql = "SELECT * FROM product";
            $datas = sql2($sql);

            foreach($datas as $data) { ?>
            
                <div class="col-lg-4">
                    <div class="item_box">
                        <a class="m-left"><img class="delitem" src="img/edit_minus.jpg" width="25px" onclick="deleteProduct('<?= $data['productID'] ?>')"  /></a>
                        <a class="m-left"><img class="editItem" src="img/edit_info.png" width="25px" onclick="editProduct('<?= $data['productID'] ?>', '<?= $data['productName'] ?>', '<?= $data['productBrand'] ?>', '<?= $data['productDescript'] ?>', '<?= $data['productQuantity'] ?>', '<?= $data['productTypeID'] ?>', '<?= $data['productCost'] ?>', '<?= $data['productImg'] ?>', '<?= $data['productBrochore'] ?>'  )"/></a>
                        <br><br>
                        <div class="itemshow">
                            <img src="<?= $data['productImg'] ?>" width="227px">
                            <h4 style="float:left; color:white;"><?= $data['productName'] ?></h4>
                            <h4 style="float:right; color:#88b32d;"><?= $data['productCost'] ?> B</h4>
                            <div style="clear:right;"><p><?= $data['productDescript'] ?></p></div>
                            <div><a href="<?= $data['productBrochore'] ?>"><p>Brochore</p></a></div>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 --> 
            <?php
            }
        ?>
        <div class="clear-b"></div>
        
        <br>
        <hr>
        
        <div id="product" class="float-l clear-l">
        <h2>Add</h2>
            <form action="function/addProduct.php" method="POST" enctype="multipart/form-data">
                <div class="float-l">
                    <p style="margin-top:4px;">Name : </p>
                    <p style="margin-top:4px;">Brand : </p>
                    <p style="margin-top:4px;">Type ID : </p>
                    <p style="margin-top:4px;">Description : </p>
                    <p style="margin-top:4px;">Quantity : </p>
                    <p style="margin-top:4px;">Cost : </p>
                    <p style="margin-top:4px;">Img : </p>
                    <p style="margin-top:4px;">Brochore : </p>
                </div>
                <div class="float-l" style="margin-left:10px;">
                    <input type="text" name="productName" style="margin-bottom:5px;"><br/>
                    <input type="text" name="productBrand" value="Uniqlo" style="margin-bottom:5px;"><br/>
                    <input type="text" name="productTypeID" style="margin-bottom:5px;" value="2"><br/>
                    <input type="text" name="productDescript" style="margin-bottom:5px;"><br/>
                    <input type="text" name="productQuantity" style="margin-bottom:5px;" value="100"><br/>
                    <input type="text" name="productCost" style="margin-bottom:5px;"><br/>
                    <input type="file" name="productImg" style="margin-bottom:-15px;"><br/>
                    <input type="file" name="productBrochore" style="margin-bottom:5px;"><br/>
                </div>
                
                
                <input type="submit" value="ADD" class="float-l clear-b">
            </form>
        </div>
        
                
        <div id="product-edit"  class="float-l clear-r">
            <h2>Edit</h2>            
            <form action="function/editProduct.php" method="POST" enctype="multipart/form-data">
                <div class="float-l">
                    <p style="margin-top:4px;">ID : </p>
                    <p style="margin-top:4px;">Name : </p>
                    <p style="margin-top:4px;">Brand : </p>
                    <p style="margin-top:4px;">Type ID :</p>
                    <p style="margin-top:4px;">Description : </p> 
                    <p style="margin-top:4px;">Quantity : </p>
                    <p style="margin-top:4px;">Cost : </p>
                    <p style="margin-top:4px;">Img : </p>
                    <p style="margin-top:4px;">Brochore : </p>
                </div>                
                <div class="float-l" style="margin-left:10px;">
                    <input type="text" name="productID-edit" id="productID-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="productName-edit"  id="productName-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="productBrand-edit" id="productBrand-edit" value="Uniqlo" style="margin-bottom:5px;"><br/>
                    <input type="text" name="productTypeID-edit" id="productTypeID-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="productDescript-edit" id="productDescript-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="productQuantity-edit" id="productQuantity-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="productCost-edit" id="productCost-edit" style="margin-bottom:5px;"><br/>
                    <input type="text" name="productImg-edit" id="productImg-edit" style="margin-bottom:-15px;"><br/>
                    <input type="text" name="productBrochore-edit" id="productBrochore-edit" style="margin-bottom:5px;"><br/>
                </div>
               
                <input type="submit" value="Edit" class="float-l clear-b">
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
