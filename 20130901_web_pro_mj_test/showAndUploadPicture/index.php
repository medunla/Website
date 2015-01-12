<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
			margin: 0;
			background: #ccc;
		}
		#upload, #gallery {
			width: 940px;
			margin: 20px auto;
			padding: 20px;
			background: #fff;
		}
		img {
			width: 300px;
		}
	</style>
</head>
<body>
	<div id="upload">
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="img-file"><br>
			Name : <input tpye="text" name="img-name"><br>
			Descript : <input tpye="text" name="img-desc"><br>
			Upload by : <input tpye="text" name="img-uploadby"><br>
			<input type="submit" value="upload">
		</form>
	</div>
	<div id="gallery">
		<?php

			// Set all part picture in server on $picture
			// $picture[0] = img/img1.jpg
			// $picture[1] = img/img2.jpg
			// $picture[3] = img/img3.jpg
			// ...
			$pictures = glob('img/img*.jpg');

			// Set text in infopicture.txt
			// $infopicture[0] = text in infopicture.txt line 1
			// $infopicture[1] = text in infopicture.txt line 2
			// $infopicture[3] = text in infopicture.txt line 3
			// ...
			$infopictures = file('img/infopicture.txt');

			// value use for loop infopicture
			$i=0;

			foreach ($pictures as $picture) {

				// Set value from infopicture.txt, partition value by __!@#$%__ <--- (from explode function)
				// if text in infopicture.txt have --> medunla__!@#$%__hhhjfdx__!@#$%__sdfessa
				// $infopicture[0] = medunla
				// $infopicture[1] = hhhjfdx
				// $infopicture[2] = sdfessa
				$infopicture = explode("__!@#$%__", $infopictures[$i]);

				echo "<br>Test echo value<br>";
				echo "picture : " . $infopicture[3] . "<br>";
				echo "infopicture[0] : " . $infopicture[0] . "<br>";
				echo "infopicture[1] : " . $infopicture[1] . "<br>";
				echo "infopicture[2] : " . $infopicture[2] . "<br>";
		?>
				<img src="<?= $infopicture[3] ?>">
				<p>Name : <?= $infopicture[0] ?></p>
				<p>Descript : <?= $infopicture[1] ?></p>
				<p>Upload by : <?= $infopicture[2] ?></p>
				<hr>
						
		<?php 
			$i++;
		} ?>
		
	</div><!-- end gallery -->
 	

</body>
</html>