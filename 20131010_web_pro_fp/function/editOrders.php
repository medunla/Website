<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['ordersID-edit']) || !isset($_POST['productID-edit']) || !isset($_POST['ordersQuantity-edit'])) {

	}
	else {
        $ordersID = $_POST['ordersID-edit'];
		$productID = $_POST['productID-edit'];
		$ordersQuantity = $_POST['ordersQuantity-edit'];

        $sql = "UPDATE orders 
		SET ordersQuantity = '$ordersQuantity'
		WHERE ordersID = '$ordersID'
		";

		sql($sql);
        header("location:../edit_orders.php");

	}

?>