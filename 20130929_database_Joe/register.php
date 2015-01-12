
<?php
	// Conect database
	$con = mysql_connect("localhost","admin","admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Check not input value
	if(!isset($_POST['userUsername']) || !isset($_POST['userPassword']) || !isset($_POST['userConPassword']) ) {
		echo "Please input value!";
		exit();
	}
	else {
		$userUsername = $_POST['userUsername'];
		$userPassword = $_POST['userPassword'];
		$userConPassword = $_POST['userConPassword'];
		$userName = $_POST['userName'];
		$userSurname = $_POST['userSurname'];
		$userTel = $_POST['userTel'];
		$userAddress = $_POST['userAddress'];
		$userLevelID = $_POST['userLevelID']; 
	}

	// Check fail input
	if($userUsername == "") {
		echo "Please input Username!";
		exit();
	}
	elseif($userPassword == "") {
		echo "Please input Password!";
		exit();
	}  
	elseif($userPassword != $userConPassword) {
		echo "Password not Match!";
		exit();
	}

	// Select name database
	$sql = "SELECT * FROM user";	
	$sqlQuery = mysql_query( $sql, $con );

	// Check query table
	if(! $sqlQuery ) {
	  echo "Could not get data : " + mysql_error();
	}

	// Check repeat username
	$checkRepeat = false;
	while($data = mysql_fetch_array($sqlQuery, MYSQL_ASSOC)) {
		if($data['userUsername'] == $userUsername) {
			$checkRepeat = true;
			echo "Username repeat.<br>";
		}

	}

	// Create data
	if(!$checkRepeat) {  
		
		$sql2 = "INSERT INTO user (userUsername, userPassword, userName, userSurname, userTel, userAddress, userLevelID) 
		VALUES ('$userUsername', '$userPassword', '$userName', '$userSurname', '$userTel', '$userAddress', '$userLevelID')";
		
		$sqlQuery2 = mysql_query($sql2, $con);
		
		if(!$sqlQuery2 ){
		  echo "Could not get data : " + mysql_error();
		}
		else {
			echo "Register Completed!<br>";      
		}
		
	}
	
	echo "<br>";
	echo "<br> Back to <a href='index.html'>Home page</a>";
	mysql_close($con);
?>

<html>
<head>
	<title>Register</title>
</head>
<body>
</body>
</html>