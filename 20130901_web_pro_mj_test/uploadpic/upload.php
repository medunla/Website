<html>
<head>
	<title>Rayong travel gallery!</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link href='http://fonts.googleapis.com/css?family=Rosario' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
</head>
<body>
	<?php		
	if($_SERVER["REQUEST_METHOD"] != "POST")
	{
		echo "Upload error<br>";
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

		echo $descript."<br>".$username."<br>";

		/* make folder if not folder */
		if(!is_dir($dir)) {	mkdir($dir,0777,TRUE);}		

		/* upload */
		if(is_uploaded_file($_FILES['img-upload']['tmp_name']))
		{
			if($_FILES['img-upload']['type'] == "image/jpeg" || $_FILES['img-upload']['type'] == "image/png")
			{
				/* move file temp -> server */
				move_uploaded_file($_FILES['img-upload']['tmp_name'], $dir."/".$dirimg);

				/* input descript & username */
				/* set value */
				$objFopen = fopen($dir2, a); // [r] read only, [w] new file and delete old file, [a] write on old file
				$text = $imgname." ?--? ".$username." ?--? ".$descript." ?--? ".$dirimg." ?--? "."\r\n";

				fwrite($objFopen, $text);
				if($objFopen)			{
					echo "text success!<br>";
				}
				else{
					echo "text invalid<br>";
				}
				fclose($objFopen);
					echo "upload text success<br>";
				}
			
		}//end if upload

	}
	else
	{
		echo "non set value";
	}
	?>

	<a href="index.php"><p>click to back home</p></a>

</body>
</html>