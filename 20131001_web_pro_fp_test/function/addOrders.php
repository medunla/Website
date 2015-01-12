<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['productID']) || !isset($_POST['ordersQuantity']) || !isset($_POST['userID']) ) {

	}
	else {
		$productID = $_POST['productID'];
		$ordersQuantity = $_POST['ordersQuantity'];
		$userID = $_POST['userID'];

		$sql = "INSERT INTO orders 
		(productID, ordersQuantity, userID)
		VALUES ('$productID', '$ordersQuantity', '$userID')
		";

		sql($sql);
        header("location:../index-admin.php");

	}

?>