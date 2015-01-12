<?php 
	include 'function/sql.php';
	include 'function/checklogin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
	<div class="<?= $l_lock ?>">
	<form action="function/loginSystem.php" method="POST" enctype="multipart/form-data">
		Username : <input type="text" name="userUsername"><br/>
		Password : <input type="text" name="userPassword"><br/>
		<input type="submit" value="Login">
	</form>
	</div>

	<div class="<?= $f_lock ?>">
		Username : <?= $userUsername ?>
		<form action="function/logout.php">
			<input type="submit" value="Logout">
		</form>
    </div>
    
    

</body>
</html>

