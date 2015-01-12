<?php include 'function/checklogin.php'; ?>
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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li class="<?= $f_lock ?>"><a href="bookmark.php">Bookmark</a></li>
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


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <!--<h1>Tulips</h1>
              <p>The tulip is a perennial, bulbous plant with showy flowers in the genus Tulipa, of which ca 75 wild species are currently accepted and which belongs to the family Liliaceae.</p>
              <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <!--<h1>Chrysanthemum</h1>
              <p>Chrysanthemums, sometimes called mums or chrysanths, are flowering plants of the genus Chrysanthemum in the family Asteraceae.</p>
              <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <!--<h1>Hydrangeas</h1>
              <p>Hydrangea is a genus of 70-75 species of flowering plants native to southern and eastern Asia (China, Japan, Korea, the Himalayas, and Indonesia) and the Americas.</p>
              <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>-->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="" src="img/c1.jpg" alt="Generic placeholder image">
          <!--<h2>Penguins</h2>
          <p>Most penguins feed on krill, fish, squid and other forms of sealife caught while swimming underwater.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="" src="img/c2.jpg" alt="Generic placeholder image">
          <!--<h2>Koala</h2>
          <p>The koala is an arboreal herbivorous marsupial native to Australia. </p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="" src="img/c31.jpg" alt="Generic placeholder image">
           <img class="" src="img/c32.jpg" alt="Generic placeholder image">
          <!--<h2>Jellyfish</h2>
          <p>Jellyfish are the major non-polyp form of individuals of the phylum Cnidaria.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


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
