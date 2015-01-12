<?php
	session_start();
	$con = mysql_connect("localhost","admin","admin");
	mysql_select_db('clinic');

	$sql = "SELECT * 
	FROM account 
	WHERE AccountUsername = '".trim($_POST['Username'])."' and 
	AccountPassword = '".trim($_POST['Password'])."'
	";
	$Show = mysql_query($sql, $con);
	$row = mysql_fetch_array($Show);

	if(!$row) {
		echo "Username and Password Invalid.<br>";
	}
	else {
		$_SESSION["Username"] = $row["AccountUsername"];
		session_write_close();

		header("location:main.php");
	}

	mysql_close($con);

?>