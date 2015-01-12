<?php 
	$login = false;
		if(isset($_POST['username'])|| isset($_COOKIE['username']))
		{

			if(isset($_COOKIE['username'])){
				$username = $_COOKIE['username'];
			}
			else{
				$username = $_POST['username'];
				setcookie("username", $username, time()+3600);
				echo $_COOKIE['username'];
			}

			$login = true;
		}
		if($login) { $lock=""; $unlock="lock";}
		else{ $lock="lock"; $unlock="";}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Travel-Chiangmai.com</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<meta name="keywords" content="WOW Slider, Java Slideshow, Website Slideshow" />
	<meta name="description" content="WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	

	<link rel="stylesheet" type="text/css" href="slide/index/engine1/style.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" />

	

	
	
	<script type="text/javascript" src="slide/index/engine1/jquery.js"></script>

<!-- facebook like -->
		<div id="fb-root">
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/th_TH/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
		</div>
<!-- end facebook like -->
</head>
<body>
	<header>
		<div id="header-wrapper">
			<div id="logo"><img src="img/logo.png"></div>
			<div id="login" class="<?= $unlock ?>">
				<form  action="login.php" method="POST" enctype="multipart/form-data">
					USER NAME <input type="text/css" name="username" class="input">
					PASSWORD <input type="password" name="password" class="input">
					<input type="submit" value="Login" class="login-btn">
				</form>
			</div>
			<div id="login-after" class="<?= $lock ?>">
				
				<form  action="logout.php">
					Username : <span style="color:#feae37; font-weight:bold; font-size:24px;"><?= $username ?> </span><input type="submit" value="Logout" class="login-btn">
				</form>
			</div>
		</div>
	</header>

