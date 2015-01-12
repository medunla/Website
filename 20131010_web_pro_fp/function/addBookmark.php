<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "GET") {

	}
	else if(!isset($_GET['a']) || !isset($_GET['b']) ) {

	}
	else {
		$productID = $_GET['a'];
		$userID = $_GET['b'];

		$sql = "INSERT INTO bookmark
		(productID, userID)
		VALUES ('$productID', '$userID')
		";
        
		sql($sql);
        header("location:../products.php");

	}

?>