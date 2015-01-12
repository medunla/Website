<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['productID']) || !isset($_POST['userID']) ) {

	}
	else {
		$productID = $_POST['productID'];
		$userID = $_POST['userID'];

		$sql = "INSERT INTO bookmark
		(productID, userID)
		VALUES ('$productID', '$userID')
		";
        
		sql($sql);
        header("location:../index-admin.php");

	}

?>