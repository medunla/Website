<?php
	include("head.php");
?>


	<div id="menu">
		<div id="menu-wrapper">

				<div id="menu_menu"><a href="index.php" class="navigation">HOME</a></div>
				<div id="menu_menu"><a href="history.php" class="navigation">HISTORY</a></div>
				<div id="menu_menu"><a href="attractions.php" class="navigation">ATTRACTIONS</a></div>
				<div id="menu_menu"><a href="souvenir.php" class="navigation">SOUVENIR</a></div>
				<div id="menu_menu"><a href="gallery.php" class="navigation">GALLERY</a></div>
				<div id="menu_menu"><a href="register.php" class="visitt">REGISTER</a></div>

		</div>	
	</div>

	<!-- ------------------------------------------------------------------------- -->

	<div id="content-re">
		<h2>REGISTER</h2>
		<div id="content-re-left">
			
			<form action="registers.php" method="POST" enctype="multipart/form-data">
				Username : <br><input type="text" name="username" class="input"/>*<br>
				Password : <br><input type="password" name="password" class="input"/>*<br><br> 
				<hr/><br>
				First name : <br><input type="text" name="fname"/>*<br>
				Last name : <br><input type="text" name="lname"/>*<br> 
				E-mail :<br> <input type="text" name="mail"/><br>
				Phone number : <br><input type="text" name="phone"/><br>
				Address :<br><input type="text" name="address-home" style="height:40px;"/><br>
				Province : <br><input type="text" name="address-province"/><br>
				Zip-Code :<br><input type="text" name="address-post"/><br>
				<input type="submit" value="Register"/>
			</form>
		</div>
		<div id="content-re-right">

			<form action="login.php" method="POST" enctype="multipart/form-data">
				<b><u>PLEASE LOGIN HERE</u><br>IF YOU HAVE A USERNAME & PASSWORD </b><br><br>
				Username : <br><input type="text" name="username" class="input"/><br>
				Password : <br><input type="password" name="password" class="input"/><br>
				<input type="submit" value="login"/>
			</form>
		</div>
	</div>

<?php
	include("footer.html");
?>
