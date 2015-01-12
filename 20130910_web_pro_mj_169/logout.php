<?php setcookie("username", "", time()-3600); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/logout.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	
</head>
<body>
	<!-- Display process -->
	<div id="content">
		<div id="text">

			<!-- head text -->
			<h1 class="h1-success">Logout success !</h1>
			<!-- description text -->
			<p>ออกจากระบบเรียบร้อย</p>

			<!-- button -->
			<form action="index.php">
				<input type="text" class="block" name="username" value="<?= $username ?>">
				<input type="submit" value="Next" class="input-success"><br>
			</form>			
			<p id="footer" class="footer-success" >THANK YOU FOR VISITED<span style="color:red; font-size:24px;"> ♥  </span>TRAVEL-CHIANGMAI.COM</p>
		</div>
	</div>
</body>
</html>