<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/logout.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	
</head>
<body>
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
		elseif(isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['fname'])&& isset($_POST['lname']))
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
			elseif(!preg_match("/[a-zA-Z0-9]/", $_POST['fname']))
			{
				$text_head = "First name character error";
				$text_desc = "คุณกรอกชื่อไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข";
			}
			elseif(!preg_match("/[a-zA-Z0-9]/", $_POST['lname']))
			{
				$text_head = "Last name character error";
				$text_desc = "คุณกรอกนามสกุลไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข";
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
				$address_home = $_POST['address-home'];
				//$address_district = $_POST['address-district'];
				$address_province = $_POST['address-province'];
				$address_post = $_POST['address-post'];


				/* folder */
				$dir = "info/userid.txt";

				/* set value */
				$objFopen = fopen($dir, a); // [r] read only, [w] new file and delete old file, [a] write on old file
				$text = $username." ?--? ".$password." ?--? ".$fname." ?--? ".$lname." ?--? ".$mail." ?--? ".$phone." ?--? ".$address_home." ?--? ".$address_province." ?--? ".$address_post." ?--? "."\r\n";
				
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
			$text_desc = "คุณกรอกยูเซอร์เนม ไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข ที่มี 4 ตัวอักษรขึ้นไป";
		}

	?>
	<!-- end Login process -->

	<!-- Display process -->
	<div id="content">
		<div id="text">

			<!-- head text -->
			<h1 class="h1-<?= $checksuccess ?>"><?= $text_head ?></h1>
			<!-- description text -->
			<p><?= $text_desc ?> </p>

			<!-- button -->
			<form action="index.php" <?= $value ?> >
				<input type="text" class="block" name="username" value="<?= $username ?>">
				<input type="submit" value="<?= $text_bt ?>" class="input-<?= $checksuccess ?>"><br>
			</form>			
			<p id="footer" class="footer-<?= $checksuccess ?>" >THANK YOU FOR VISITED<span style="color:red; font-size:24px;"> ♥  </span>TRAVEL-CHIANGMAI.COM</p>
		</div>
	</div>

</body>
</html>
