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
		$diff = abs(strtotime($_POST['userBirth-edit']) - strtotime('now'));
		$years = floor($diff / (365*60*60*24));

		// Check sent post
		if($_SERVER["REQUEST_METHOD"] != "POST") {
			$text_head = "Register error";
			$text_desc = "ระบบกำลังมีปัญหา กรุณาสมัครสมาชิกใหม่อีกครั้ง";
		}
		// Check sent value
		elseif(!isset($_POST['userID-edit']) || !isset($_POST['userPassword-edit']) || !isset($_POST['userFname-edit']) || !isset($_POST['userLname-edit']) || !isset($_POST['userBirth-edit']) || !isset($_POST['userAddress-edit']) || !isset($_POST['userTel-edit']) || !isset($_POST['userMail-edit']) || !isset($_POST['userLevel-edit']) ) {
			$text_head = "Sent value error";
			$text_desc = "กรุณากรอกข้อมูลให้ครบถ้วน";
		}

		// Check invalid character
		elseif(!preg_match("/[a-zA-Z0-9]{4,25}/", $_POST['userPassword-edit']))
		{
			$text_head = "Password character error";
			$text_desc = "คุณกรอกรหัสผ่านไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข ตั้งแต่ 4 ตัวอักษรขึ้นไป";
		}
		elseif(!preg_match("/[a-zA-Z]{4,25}/", $_POST['userFname-edit']))
		{
			$text_head = "Firstname character error";
			$text_desc = "คุณกรอกชื่อไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข ตั้งแต่ 4 ตัวอักษรขึ้นไป";
		}
		elseif(!preg_match("/[a-zA-Z]{4,25}/", $_POST['userLname-edit']))
		{
			$text_head = "Lastname character error";
			$text_desc = "คุณกรอกนามสกุลไม่ถูกต้อง ควรใส่ตัวอักษรภาษาอังกฤษหรือตัวเลข ตั้งแต่ 4 ตัวอักษรขึ้นไป";
		}
		elseif(!preg_match("/.{20,50}/", $_POST['userAddress-edit']))
		{
			$text_head = "Address character error";
			$text_desc = "คุณกรอกที่อยู่ไม่ถูกต้อง ควรใส่ตั้งแต่ 20-50 ตัวอักษร";
		}
		elseif(!preg_match("/\d{2,3}-\d{3}-\d{4}/", $_POST['userTel-edit']))
		{
			$text_head = "Phone character error";
			$text_desc = "คุณกรอกเบอร์โทรศัพท์ไม่ถูกต้อง ควรใส่ตาม xx-xxx-xxxx, xxx-xxx-xxxx";
		}
		elseif(!preg_match("/@.*com/", $_POST['userMail-edit']))
		{
			$text_head = "Email character error";
			$text_desc = "คุณกรอกอีเมลล์ไม่ถูกต้อง ควรใส่ให้ถูกต้อง";
		}
		// Check age >= 18 year
		elseif ($years<18) {
			$text_head = "Age error";
			$text_desc = "ท่านอายุไม่ถึงเกณฑ์";
		}
		else {

			$userID = $_POST['userID-edit'];
			$userPassword = $_POST['userPassword-edit'];
			$userFname = $_POST['userFname-edit'];
			$userLname = $_POST['userLname-edit'];
			$userBirth = $_POST['userBirth-edit'];
			$userAddress = $_POST['userAddress-edit'];
			$userTel = $_POST['userTel-edit'];
			$userMail = $_POST['userMail-edit'];
			$userLevel = $_POST['userLevel-edit'];
            
            echo $userID, "<br/>";
            echo $userPassword, "<br/>";
            echo $userFname, "<br/>";
            echo $userLname, "<br/>";


            $sql2 = "UPDATE user 
            SET userPassword = '$userPassword', userFname = '$userFname', userLname = '$userLname', userBirth = '$userBirth', userAddress = '$userAddress', userTel = '$userTel', userMail = '$userMail', userLevel = '$userLevel'
            WHERE userID = '$userID'
            ";
            sql($sql2);
            
            $checksuccess = "success";
            $text_show = "SUCCESS";
            $text_head = "Register success";
            $text_desc = "";
            $text_bt = "Next";
            $value = "method=\"POST\"";

            header("location:../edit_member.php");								
		
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
			
			<form id="display-form" action="index.php" <?= $value ?> enctype="multipart/form-data">
				<input class="block" type="text" name="username" value="<?= $userUsername ?>"/>
				<input id="display-bt" class="button" type="submit" value="<?= $text_bt ?>" />
			</form>
		</div><!-- end display-infomation -->

	</div>
	<!-- end Display process -->
</body>
</html>