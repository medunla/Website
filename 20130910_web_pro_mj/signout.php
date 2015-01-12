<?php setcookie("username", "", time()-3600); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign out :: Rayongtrips</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/css.css">
	
</head>
<body id="body">

	<!-- Display process -->
	<div id="display-wrapper">				
		<div id="display-show"><h1>SUCCESS</h1></div>
		<div id="display-infomation">
			<div id="display-head">
				<p>Sign out success</p>
			</div>
			<div id="display-desc">
				<p>ขอบคุณที่ใช้บริการครับ</p>
			</div>
			
			<form id="display-form" action="index.php">
				<input id="display-bt" class="button" type="submit" value="Next" />
			</form>
		</div><!-- end display-infomation -->

	</div>
	<!-- end Display process -->

</body>
</html>