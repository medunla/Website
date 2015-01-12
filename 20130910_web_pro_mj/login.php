<!DOCTYPE html>
<html>
<head>
	<title>Sign In :: Rayongtrips</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/css.css">
	
</head>
<body id="body">

	<!-- Login process -->
	<?php
		$checksuccess = "error";
		$text_show = "ERROR";
		$text_head = "";
		$text_desc = "";
		$text_bt = "Back";
		$value = "";
		if($_SERVER["REQUEST_METHOD"] != "POST")
		{
			$text_head = "Login error";
			$text_desc = "ระบบกำลังมีปัญหา กรุณาเข้าสู่ระบบใหม่อีกครั้ง";
		}
		elseif(isset($_POST['username'])&& isset($_POST['password']) )
		{
			/* check invalid character*/
			if(!preg_match("/[a-zA-Z0-9]{4,}/", $_POST['username']))
			{
				$text_head = "Username character error";
				$text_desc = "คุณกรอกยูเซอร์เนมไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข ที่มี 4 ตัวอักษรขึ้นไป";
			}
			elseif(!preg_match("/[a-zA-Z0-9]{4,}/", $_POST['password']))
			{
				$text_head = "Password character error";
				$text_desc = "คุณกรอกรหัสผ่านไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข ที่มี 4 ตัวอักษรขึ้นไป";
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
							$login=true;
							$checksuccess = "success";
							$text_show = "SUCCESS";
							$text_head = "Login success";
							$text_desc = "ยินดีต้อนรับท่าน "."<b>".$username."</b>";
							$text_bt = "Next";
							$value = "method=\"POST\"";
						}
					}
				}//end foreach
				if(!$login)	{
					$username = null;
					$text_head = "Username or Password invalid";
					$text_desc = "ยูเซอร์เนมหรือรหัสผ่านผิดพลาด";
				}

			}//end else check	
		}
		else
		{
			$text_head = "Username character error";
			$text_desc = "คุณกรอกยูเซอร์เนม ไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข ที่มี 4 ตัวอักษรขึ้นไป";
		}
	?>
	<!-- end Login process -->

	<!-- Display process -->
	<div id="display-wrapper">				
		<div id="display-show"><h1><?= $text_show ?></h1></div>
		<div id="display-infomation">
			<div id="display-head">
				<p><?= $text_head ?></p>
			</div>
			<div id="display-desc">
				<p><?= $text_desc ?></p>
			</div>
			
			<form id="display-form" action="index.php" <?= $value ?> enctype="multipart/form-data">
				<input class="block" type="text" name="username" value="<?= $username ?>"/>
				<input id="display-bt" class="button" type="submit" value="<?= $text_bt ?>" />
			</form>
		</div><!-- end display-infomation -->

	</div>
	<!-- end Display process -->

</body>
</html>