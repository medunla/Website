<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link href='http://fonts.googleapis.com/css?family=Rosario' rel='stylesheet' type='text/css'>
	
</head>
<body>
<?php
	if($_SERVER["REQUEST_METHOD"] != "POST")
	{
		echo "Login error";
	}
	elseif(isset($_POST['username'])&& isset($_POST['password']) )
	{
		/* check invalid character*/
		if(!preg_match("/[a-zA-Z0-9]{4,}/", $_POST['username']))
		{
			echo "username error (a-z,0-9 and 4 character upper)<br>";
		}
		elseif(!preg_match("/[a-zA-Z0-9]{4,}/", $_POST['password']))
		{
			echo "password error (a-z,0-9 and 4 character upper)<br>";
		}
		else
		{
			/* start login */
			$username = $_POST['username'];
			$password = $_POST['password'];

			/* folder */
			$dir = "info/userid.txt";

			$login = false;
			foreach (file($dir) as $userid) {
				$tempuser = explode(" ?--? ", $userid);
				if($username==$tempuser[0])
				{
					if ($password==$tempuser[1])
					{
						echo "login success!";
						$login=true;						
					}
				}
			}//end foreach
			if(!$login)	{
				echo "Username or password invalid";
			}

		}//end else check	
	}
	else
	{
		echo "non set value";
	}


	/* show buttom go to home & login */
	if($login)
	{
?>
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="username" value="<?= $username ?>" />
			<input type="submit"/>
		</form>
<?php
	}

?>

</body>
</html>