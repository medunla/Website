<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['productID']) || !isset($_POST['ordersQuantity']) || !isset($_POST['userID']) || !isset($_POST['cartID']) ) {

	}
	else {
		$productID = $_POST['productID'];
		$ordersQuantity = $_POST['ordersQuantity'];
		$userID = $_POST['userID'];
        $cartID = $_POST['cartID'];

		$sql = "INSERT INTO orders 
		(productID, ordersQuantity, userID)
		VALUES ('$productID', '$ordersQuantity', '$userID')
		";
        
        $sql2 = "DELETE
        FROM cart
		WHERE cartID = '$cartID'
		";

        
		sql($sql);
        sql($sql2);
        header("location:../cart.php");

	}

?>