<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['cartID-edit']) || !isset($_POST['cartQuantity-edit']) ) {

	}
	else {
		$cartID = $_POST['cartID-edit'];
		$cartQuantity = $_POST['cartQuantity-edit'];

		$sql = "UPDATE cart
		SET cartQuantity = '$cartQuantity'
		WHERE cartID = '$cartID'
		";
		
        sql($sql);
        header("location:../index-admin.php");

	}

?>