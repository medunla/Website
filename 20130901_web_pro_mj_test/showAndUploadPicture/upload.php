<html>
<head>
</head>
<body>
	<?php

		// Check amount picture in server
		$checks=glob("img/img*.jpg");
		$amount=0;
		foreach ($checks as $check) {
			// count from loop of $check == amount picture in server
			$amount++;
		}

		// Set amount next picture for use set name picture
		$amount++;
		
		if($_SERVER["REQUEST_METHOD"] != "POST")
		{
			echo "Not POST.<br>";
		}

		// Check index.php have sent value
		else if(isset($_FILES['img-file']) && isset($_POST['img-name']) && isset($_POST['img-desc']) && isset($_POST['img-uploadby']))
		{	
			echo "#1 Sent value success.<br>";

			// Set value for use
			$img_file = $_FILES['img-file'];
			$img_name = $_POST['img-name'];
			$img_desc = $_POST['img-desc'];
			$img_uploadby = $_POST['img-uploadby'];
			$img_pardition = "img/img" . $amount . ".jpg"; //<--------------------------------------

			// Check have file picture on temp server
			if(is_uploaded_file($img_file['tmp_name']))
			{
				echo "#2 Have file picture on temp server.<br>";

				// Check type picture, need type jpg, png ONLY!!!
				if($img_file['type'] == "image/jpeg" || $img_file['type'] == "image/png")
				{
					// Move file picture on temp server to server
					move_uploaded_file($img_file['tmp_name'], $img_pardition); //<--------------------------------------
					
					echo "#3 Move file picture success.<br>";

					// Open file txt, a => open old file and write in new line
					$opentxt = fopen('img/infopicture.txt', a);

					// Set text for write in infopicture.txt
					// use __!@#$%__ for portion value (use another text)
					// . <-- is use for use value and text in one line
					// \r\n <-- is new line
					$text = $img_name . "__!@#$%__" . $img_desc. "__!@#$%__" . $img_uploadby."__!@#$%__" . $img_pardition."__!@#$%__" . "\r\n";

					// Write text on file
					fwrite($opentxt, $text);

					// Check file can open
					if($opentxt==true){
						echo "#4 Save infopicture success.<br>";
					}
					else{
						echo "Not open file text";
					}

				}
				else{
					echo "Type picture not jpg or png<br>";
				}			
			}//end if move file

		}

		// index.php not sent value
		else
		{
			echo "Non sent value.<br>";
		}
		?>


<a href="index.php"><p>click to back home</p></a>

</body>
</html>