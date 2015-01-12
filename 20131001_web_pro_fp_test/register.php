<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
	<form action="function/addUser.php" method="POST" enctype="multipart/form-data">
		Username : <input type="text" name="userUsername"><br/>
		Password : <input type="password" name="userPassword"><br/>
		Password : <input type="password" name="userConPassword"><br/>
		<br/>
		Fname : <input type="text" name="userFname"><br/>
		Lname : <input type="text" name="userLname"><br/>
		Birthday : <input type="date" name="userBirth"><br/>
		Address : <input type="text" name="userAddress"><br/>
		Phone : <input type="text" name="userTel"><br/>
		E-mail : <input type="email" name="userMail"><br/>
		<input type="text" name="userLevel" value="2" class="hide"><br/>
		<input type="submit">
	</form>
	
</body>
</html>