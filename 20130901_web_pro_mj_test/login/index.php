<!DOCTYPE html>
<html>
<head>
	<title>Rayong travel gallery!</title>
	<meta charset="utf-8" >
	
</head>
<body>
	<div>*(a-z,0-9,อย่างน้อย 4 ตัวอักษร)</div>
	<form  action="login.php" method="POST" enctype="multipart/form-data">
		Login<br>
		Username : <input type="text" name="username" id="username"/><br>
		Password : <input type="password" name="password" id="password"/><br>
		<input type="submit" value="login"/>
	</form>
	<br>
	<form  action="register.php" method="POST" enctype="multipart/form-data">
		Register<br>
		Username : <input type="text" name="username"/>*<br>
		Password : <input type="password" name="password"/>*<br><br>
		First name : <input type="text" name="fname"/>
		Last name : <input type="text" name="lname"/>*<br>
		E-mail : <input type="text" name="mail"/><br>
		Phone number : <input type="text" name="phone"/><br>
		Address :<br>
		บ้านเลขที่ :<input type="text" name="address-home"/>
		ตำบล :<input type="text" name="address-district"/><br>
		จังหวัด :<input type="text" name="address-province"/>
		รหัสไปรณีย์ :<input type="text" name="address-post"/><br>

		<input type="submit" value="Register"/>
	</form>  	

</body>
</html>