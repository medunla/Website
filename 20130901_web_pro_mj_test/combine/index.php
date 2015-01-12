<!DOCTYPE html>
<html>
<head>
	<title>Rayong travel gallery!</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link href='http://fonts.googleapis.com/css?family=Rosario' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
</head>
<body>
	<?php
		$login = false;
		if(isset($_POST['username']))
		{
			$username = $_POST['username'];
			$login = true;
		}
		if($login) { $lock=""; $unlock="lock";}
		else{ $lock="lock"; $unlock="";}
	?>

	<div id="signin" class="<?= $unlock ?>" >sign in</div>
	<div id="signout" class="<?= $lock ?>" >sign out</div>
	<div id="shared" class="<?= $lock ?>" >shared</div>

	<div id="signin-in">
	<form  action="login.php" method="POST" enctype="multipart/form-data">
		Login<br>
		Username : <input type="text" name="username" id="username"/><br>
		Password : <input type="password" name="password" id="password"/><br>
		<input type="text" value="<?= $username ?>"/><br>
		<input type="submit" value="login"/>
	</form>
	</div>

</body>
</html>