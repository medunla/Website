<?php
	session_start();

	// Conect database
	$con = mysql_connect("localhost","admin","admin");
	mysql_select_db('restaurant');

	// Check input
	if(!isset($_POST['userUsername']) || !isset($_POST['userPassword']) ) {
		echo "Please input Username or Password.";
		exit();
	}
	else {
		$userUsername = $_POST['userUsername'];
		$userPassword = $_POST['userPassword'];
	} 

	$sql = "SELECT * FROM user 
	WHERE userUsername = '$userUsername' and 
	userPassword = '$userPassword'
	";

	$sqlQuery = mysql_query($sql, $con);
	$data = mysql_fetch_array($sqlQuery);

	$level = $data['userLevelID'];

	if(!$data) {
		echo "Username and Password Invalid.<br>";
	}
	else {
		$_SESSION['userUsername'] = $data['userUsername'];
		$_SESSION['userID'] = $data['userID'];

			// Query level user
			$sql2 = "SELECT * FROM userlevel 
			WHERE userLevelID = '$level'
			";

			$sqlQuery2 = mysql_query($sql2, $con);
				if(!$sqlQuery2 )	{
				  echo "Could not get data: ";
				  echo mysql_error();
				  echo "<br> Back to <a href='container.php'>Main page</a>";
				}
			$data2 = mysql_fetch_array($sqlQuery2);

		$_SESSION['userLevelName'] = $data2['userLevelName'];

		session_write_close();

		if($data2) {
			header("location:container.php");
		}		
	}

	mysql_close($con);

?>