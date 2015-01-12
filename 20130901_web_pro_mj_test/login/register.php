<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" >

	
</head>
<body>
<?php
	if($_SERVER["REQUEST_METHOD"] != "POST")
	{
		echo "Register error";
	}
	elseif(isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['fname'])&& isset($_POST['lname']))
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
		elseif(!preg_match("/[a-zA-Z0-9]/", $_POST['fname']))
		{
			echo "first name error (a-z,0-9)<br>";
		}
		elseif(!preg_match("/[a-zA-Z0-9]/", $_POST['lname']))
		{
			echo "last name error (a-z,0-9)<br>";
		}
		else
		{
			/* start register */
			$username = $_POST['username'];
			$password = $_POST['password'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$mail = $_POST['mail'];
			$phone = $_POST['phone'];
			$address_home = $_POST['address-home'];
			$address_district = $_POST['address-district'];
			$address_province = $_POST['address-province'];
			$address_post = $_POST['address-post'];


			/* folder */
			$dir = "info/userid.txt";

			/* set value */
			$objFopen = fopen($dir, a); // [r] read only, [w] new file and delete old file, [a] write on old file
			$text = $username." ?--? ".$password." ?--? ".$fname." ?--? ".$lname." ?--? ".$mail." ?--? ".$phone." ?--? ".$address_home." ?--? ".$address_district." ?--? ".$address_province." ?--? ".$address_post." ?--? "."\r\n";

			fwrite($objFopen, $text);
			if($objFopen)			{
				echo "register success!";
			}
			else{
				echo "register invalid";
			}
			fclose($objFopen);

			

		}//end else check	
	}
	else
	{
		echo "non set value";
	}

?>

</body>
</html>