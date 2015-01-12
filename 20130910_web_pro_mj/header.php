<?php 
	
	/* check login */
	$login = false;
	if( isset($_POST['username']) || isset($_COOKIE['username']))
	{

		if( isset($_COOKIE['username']) ){
			$username = $_COOKIE['username'];
		}
		else{
			$username = $_POST['username'];
			setcookie("username", $username, time()+3600);
			echo $_COOKIE['username'];
		}
		$login = true;
	}
	/* lock navigation */
	if($login) { $lock=''; $unlock='block'; }
	else{ $lock='block'; $unlock=''; }

	/* active page */
	// 1)home, 2)information, 3)trips, 4)product, 5)gallery, 6)signup, 7)signin, 8)signout
	
	/* set default */
	$nav_home="nav"; $nav_information="nav"; $nav_trips="nav"; $nav_product="nav";
	$nav_gallery="nav"; $nav_signup="nav"; $nav_signin="nav"; $nav_signout="nav";

	/* set active page */
	if($page=="home"){ $nav_home="nav-active"; }
	elseif($page=="information"){ $nav_information="nav-active"; }	
	elseif($page=="trips"){ $nav_trips="nav-active"; }
	elseif($page=="product"){ $nav_product="nav-active"; }	
	elseif($page=="gallery"){ $nav_gallery="nav-active"; }
	elseif($page=="signup"){ $nav_signup="nav-active"; }
	elseif($page=="signin"){ $nav_signin="nav-active"; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rayongtrips :: เว็บแนะนำสถานที่ท่องเที่ยวจังหวัดระยอง</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/css.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>
<body>
<header>
	<div id="header-bg"><img src="img/header-bg01.jpg"></div>	
	<nav>
		<!-- Logo -->
		<a href="index.php"><div id="navigation-logo">
			<h1>Rayongtrips</h1>
		</div></a>		
		<!-- Home -->
		<a href="index.php"><div class="<?= $nav_home ?>">
			<p>Home</p>
		</div></a>
		<!-- Information -->
		<a href="information.php"><div class="<?= $nav_information ?>">
			<p>Information</p>
		</div></a>
		<!-- Trips -->
		<a href="trips.php"><div class="<?= $nav_trips ?>">
			<p>Trips</p>
		</div></a>
		<!-- Product -->
		<a href="product.php"><div class="<?= $nav_product ?>">
			<p>Product</p>
		</div></a>
		<!-- Gallery -->
		<a href="gallery.php"><div class="<?= $nav_gallery ?>">
			<p>Gallery</p>
		</div></a>
		<!-- Sign in -->
		<a href="signin.php"><div id="nav-right" class="<?= $nav_signin ?> <?= $unlock ?>">
			<p>Sign In</p>
		</div></a>
		<!-- Sign up -->
		<a href="signup.php"><div id="nav-right" class="<?= $nav_signup ?> <?= $unlock ?>">
			<p>Sign up</p>
		</div></a>		
		<!-- Sign out -->
		<a href="signout.php"><div id="nav-right" class="<?= $nav_signout ?> <?= $lock ?>">
			<p>Sign out</p>
		</div></a>		
	</nav>	
</header>