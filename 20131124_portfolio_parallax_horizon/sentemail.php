<?php

	if($_SERVER["REQUEST_METHOD"] != "POST") {
		$excaption = "System maintenance.";
	}
	elseif( isset($_POST['subject']) && $_POST['subject'] == "") {
		$excaption = "Please input Subject.";
	}
	elseif( isset($_POST['name']) && $_POST['name'] == "") {
		$excaption = "Please input Name.";
	}
	elseif( isset($_POST['email']) && $_POST['email'] == "") {
		$excaption = "Please input E-mail.";
	}
	elseif( isset($_POST['message']) && $_POST['message'] == "") {
		$excaption = "Please input Message.";
	}
	else {
		$strTo = "panupatnew@gmail.com";

		$strSubject = "=?UTF-8?B?".base64_encode($_POST['subject'])."?=";

		$strHeader = "MIME-Version: 1.0' . \r\n";

		$strHeader .= "Content-type: text/html; charset=utf-8\r\n";

		$strHeader .= "From: " . $_POST['name'];

		$strMessage = $_POST['message'];

		$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //

		if(!$flgSend) {
			$excaption = "Sent email false.";
		}
		else {
			$excaption = "Sent email finish.";
		}

		
	}
?>

<html>
<head>
	<meta charset="utf-8" />
    <title>Portfolio | Sent e-mail</title>
    <link rel="stylesheet" href="lib/css/style.css" />
</head>
<body>
	<h1 class="excaption">
		<?= $excaption ?><br>
		<a href="index.php" class="back-home transition-0-3s">BACK</a>

	</h1>
</body>
</html>