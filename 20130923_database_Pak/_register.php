<?
	// Conect database
	$con = mysql_connect("localhost","admin","admin");

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Check fail input
	if($_POST['Username'] == "") {
		echo "Please input Username!";
		exit();
	}
	if($_POST['Password'] == "") {
		echo "Please input Password!";
		exit();
	}  
	if($_POST['Password'] != $_POST['ConPassword']) {
		echo "Password not Match!";
		exit();
	}

	// Select name database
	$sql = "SELECT * FROM account";
	mysql_select_db('clinic');
	$Show = mysql_query( $sql, $con );

	if(! $Show )
	{
	  die('Could not get data: ' . mysql_error());
	}

	$checkRepeat = false;
	$countID = 0;
	while($row = mysql_fetch_array($Show, MYSQL_ASSOC)) {
		if($row['AccountUsername'] == $_POST['Username']) {
			$checkRepeat = true;
			echo "Username repeat.<br>";
		}
		$countID++;
	}
	$countID++;

	if(!$checkRepeat) {  
		$sql2 = "INSERT INTO account (AccountID, AccountUsername, AccountPassword) VALUES ('$countID', '".$_POST["Username"]."', '".$_POST["Password"]."')";
		$Show2 = mysql_query($sql2, $con);
		
		if(!$Show2 ){
		  die('Could not get data: ' . mysql_error());
		}
		else {
			echo "Register Completed!<br>";      
		}
		
	}
	
	echo "<br>";

	echo "<br> Go to <a href='index.html'>Home page</a>";
	mysql_close($con);
?>