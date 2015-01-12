<!DOCTYPE html>
<html>
<head>
	<title>Register :: Rayongtrips</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/css.css">
	
</head>
<body id="body">

	<!-- Register process -->
	<?php
		$checksuccess = "error";
		$text_show = "ERROR";
		$text_head = "";
		$text_desc = "";
		$text_bt = "Back";
		$value = "";
		if($_SERVER["REQUEST_METHOD"] != "POST")
		{
			$text_head = "Register error";
			$text_desc = "ระบบกำลังมีปัญหา กรุณาสมัครสมาชิกใหม่อีกครั้ง";
		}
		elseif(isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['mail']))
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
			elseif(!preg_match("/@.*com/", $_POST['mail']))
			{
				$text_head = "Email character error";
				$text_desc = "คุณกรอกอีเมลล์ไม่ถูกต้อง ควรใส่ให้ถูกต้อง";
			}
			else
			{
			/* check repeat username */
			$checkrepeatbool=true;
			foreach (file('info/userid.txt') as $checkrepeat) {
				$tempid = explode(" ?--? ", $checkrepeat);
				if($_POST['username']==$tempid[0]){$checkrepeatbool=false;}		
			}		
			if(!$checkrepeatbool)
			{
				$text_head = "Username repeat";
				$text_desc = "ยูเซอร์เนมไม่สามารถใช้งานได้";
			}
			/* start register */
			else
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$mail = $_POST['mail'];
				$phone = $_POST['phone'];
				$address = $_POST['address'];
				$zipcode = $_POST['zipcode'];
				


				/* folder */
				$dir = "info/userid.txt";

				/* set value */
				$objFopen = fopen($dir, a); // [r] read only, [w] new file and delete old file, [a] write on old file
				$text = $username." ?--? ".$password." ?--? ".$mail." ?--? ".$fname." ?--? ".$lname." ?--? ".$phone." ?--? ".$address." ?--? ".$zipcode." ?--? "."\r\n";

				fwrite($objFopen, $text);
				if($objFopen)			{
					$checksuccess = "success";
					$text_show = "SUCCESS";
					$text_head = "Register success";
					$text_desc = "ยินดีต้อนรับท่าน "."<b>".$username."</b>";
					$text_bt = "Next";
					$value = "method=\"POST\"";
				}
				else{
					$text_head = "Register error";
					$text_desc = "ระบบกำลังมีปัญหา กรุณาสมัครสมาชิกใหม่อีกครั้ง";
				}
				fclose($objFopen);
				
			}//end register
			}//end else check	
		}
		else
		{
			$text_head = "Username character error";
			$text_desc = "คุณกรอกยูเซอร์เนม ไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข ที่มี 4 ตัวอักษรขึ้นไป111";
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