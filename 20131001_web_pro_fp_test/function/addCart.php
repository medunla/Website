<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['productID']) || !isset($_POST['userID']) || !isset($_POST['cartQuantity']) ) {

	}
	else {
		$productID = $_POST['productID'];
		$userID = $_POST['userID'];
        $cartQuantity = $_POST['cartQuantity'];

		$sql = "INSERT INTO cart
		(userID, productID, cartQuantity)
		VALUES ('$userID', '$productID', '$cartQuantity')
		";
        
		sql($sql);
        header("location:../index-admin.php");

	}

?>