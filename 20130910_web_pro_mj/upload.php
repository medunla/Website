<!DOCTYPE html>
<html>
<head>
	<title>Share :: Rayongtrips</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/css.css">
	
</head>
<body id="body">

	<!-- upload process -->
	<?php	
		$checksuccess = "error";
		$text_show = "ERROR";
		$text_head = "";
		$text_desc = "";
		$text_bt = "Back";
		if($_SERVER["REQUEST_METHOD"] != "POST")
		{
			$text_head = "Share error";
			$text_desc = "ระบบกำลังมีปัญหา กรุณาแชร์รูปใหม่อีกครั้ง";
		}
		else if(isset($_FILES['img-upload'])&& isset($_POST['img-name'])&& isset($_POST['img-username']))
		{
			/* start upload */
			$sid = $_FILES['img-upload'];
			$imgname = $_POST['img-name'];
			$descript = $_POST['img-descript'];
			$username = $_POST['img-username'];
			$dir = "img/upload";
			$dir2 = "img/upload/info/infopicture.txt";

			/* count number picture */
			$checks=glob("img/upload/img*.jpg");
			$count=1;
			foreach ($checks as $check) {
				$count++;
			}
			$dirimg = "img".$count.".jpg";

			/* make folder if not folder */
			if(!is_dir($dir)) {	mkdir($dir,0777,TRUE);}		

			/* upload */
			if(is_uploaded_file($_FILES['img-upload']['tmp_name']))
			{
				/* check type file */
				if($_FILES['img-upload']['type'] == "image/jpeg" || $_FILES['img-upload']['type'] == "image/png")
				{
					/* move file temp -> server */
					move_uploaded_file($_FILES['img-upload']['tmp_name'], $dir."/".$dirimg);

					/* input descript & username */
					/* set value */
					$objFopen = fopen($dir2, a); // [r] read only, [w] new file and delete old file, [a] write on old file
					$text = $imgname." ?--? ".$username." ?--? ".$descript." ?--? ".$dir."/".$dirimg." ?--? "."\r\n";

					fwrite($objFopen, $text);
					if($objFopen){
						$checksuccess = "success";
						$text_show = "SUCCESS";
						$text_head = "Share success";
						$text_desc = "แชร์ความทรงจำของท่านเรียบร้อย";
						$text_bt = "Next";						
					}
					else{
						$text_head = "Share error";
						$text_desc = "ระบบกำลังมีปัญหา กรุณาแชร์รูปใหม่อีกครั้ง";						
					}
					fclose($objFopen);
				}
				else {
					$text_head = "Type file error";
					$text_desc = "กรุณาใช้รูปภาพที่มีนามสกุล jpeg หรือ png";
				}
				
			}//end if upload
		}
		else
		{
			$text_head = "Share error";
			$text_desc = "ระบบกำลังมีปัญหา กรุณาแชร์รูปใหม่อีกครั้ง";
		}
	?>
	<!-- end upload process -->

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