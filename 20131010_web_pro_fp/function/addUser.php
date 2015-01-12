<?php include 'sql.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	
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

		// Calculater age
		$diff = abs(strtotime($_POST['userBirth']) - strtotime('now'));
		$years = floor($diff / (365*60*60*24));

		// Check sent post
		if($_SERVER["REQUEST_METHOD"] != "POST") {
			$text_head = "Register error";
			$text_desc = "ระบบกำลังมีปัญหา กรุณาสมัครสมาชิกใหม่อีกครั้ง";
		}
		// Check sent value
		elseif(!isset($_POST['userUsername'])&& !isset($_POST['userPassword']) && !isset($_POST['userConPassword']) && !isset($_POST['userFname']) && !isset($_POST['userLname']) && !isset($_POST['userBirth']) && !isset($_POST['userAddress']) && !isset($_POST['userTel']) && !isset($_POST['userMail']) && !isset($_POST['userLevel']) ) {
			$text_head = "Sent value error";
			$text_desc = "กรุณากรอกข้อมูลให้ครบถ้วน";
		}
		// Check invalid character
		elseif(!preg_match("/[a-zA-Z0-9]{4,25}/", $_POST['userUsername']))
		{
			$text_head = "Username character error";
			$text_desc = "คุณกรอกยูเซอร์เนมไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข ตั้งแต่ 4 ตัวอักษรขึ้นไป";
		}
		elseif(!preg_match("/[a-zA-Z0-9]{4,25}/", $_POST['userPassword']))
		{
			$text_head = "Password character error";
			$text_desc = "คุณกรอกรหัสผ่านไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข ตั้งแต่ 4 ตัวอักษรขึ้นไป";
		}
		elseif(!preg_match("/[a-zA-Z]{4,25}/", $_POST['userFname']))
		{
			$text_head = "Firstname character error";
			$text_desc = "คุณกรอกชื่อไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข ตั้งแต่ 4 ตัวอักษรขึ้นไป";
		}
		elseif(!preg_match("/[a-zA-Z]{4,25}/", $_POST['userLname']))
		{
			$text_head = "Lastname character error";
			$text_desc = "คุณกรอกนามสกุลไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข ตั้งแต่ 4 ตัวอักษรขึ้นไป";
		}
		elseif(!preg_match("/.{20,50}/", $_POST['userAddress']))
		{
			$text_head = "Address character error";
			$text_desc = "คุณกรอกที่อยู่ไม่ถูกต้อง ควรใส่ตั้งแต่ 20-50 ตัวอักษร";
		}
		elseif(!preg_match("/\d{2,3}-\d{3}-\d{4}/", $_POST['userTel']))
		{
			$text_head = "Phone character error";
			$text_desc = "คุณกรอกเบอร์โทรศัพท์ไม่ถูกต้อง ควรใส่ตาม xx-xxx-xxxx, xxx-xxx-xxxx";
		}
		elseif(!preg_match("/@.*com/", $_POST['userMail']))
		{
			$text_head = "Email character error";
			$text_desc = "คุณกรอกอีเมลล์ไม่ถูกต้อง ควรใส่ให้ถูกต้อง";
		}
		// Check password = conPassword
		elseif($_POST['userPassword'] != $_POST['userConPassword']) {
			$text_head = "Password not macth error";
			$text_desc = "กรุณากรอกรหัสผ่านให้ตรงกัน";
		}
		// Check age >= 18 year
		elseif ($years<18) {
			$text_head = "Age error";
			$text_desc = "ท่านอายุไม่ถึงเกณฑ์";
		}
		else {
			// Check repeat username
			$sql = "SELECT * FROM user";
			$datas = sql2($sql);			

			// Check repeat username
			$checkRepeat = false;
			foreach ($datas as $data) {
				if($data['userUsername'] == $_POST['userUsername']) {
					$checkRepeat = true;
					$text_head = "Username repeat error";
					$text_desc = "ยูเซอร์เนมซ้ำ";
				}
			}

			// ---------- end check username repeat ---------- //

			$userUsername = $_POST['userUsername'];
			$userPassword = $_POST['userPassword'];
			$userFname = $_POST['userFname'];
			$userLname = $_POST['userLname'];
			$userBirth = $_POST['userBirth'];
			$userAddress = $_POST['userAddress'];
			$userTel = $_POST['userTel'];
			$userMail = $_POST['userMail'];
			$userLevel = $_POST['userLevel'];


			// Create data
			if(!$checkRepeat) {  
				$sql2 = "INSERT INTO user (userUsername, userPassword, userFname, userLname, userBirth, userAddress, userTel, userMail, userLevel) 
				VALUES ('$userUsername', '$userPassword', '$userFname', '$userLname', '$userBirth', '$userAddress', '$userTel', '$userMail', '$userLevel')";
				sql($sql2);
				
				$checksuccess = "success";
				$text_show = "SUCCESS";
				$text_head = "Register success";
				$text_desc = "ยินดีต้อนรับท่าน "."<b>".$userUsername."</b>";
				$text_bt = "Next";
				$value = "method=\"POST\"";

				header("location:../login.php");								
			} // end Create data
		
		} // end else

	?>
	<!-- end Register process -->

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
			
			<form id="display-form" action="../register.php">
				<input id="display-bt" class="button" type="submit" value="<?= $text_bt ?>" />
			</form>
		</div><!-- end display-infomation -->

	</div>
	<!-- end Display process -->
</body>
</html>