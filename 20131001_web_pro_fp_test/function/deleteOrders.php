<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['ordersID-delete'])) {

	}
	else {
		$ordersID = $_POST['ordersID-delete'];

		$sql = "DELETE FROM orders
		WHERE ordersID = '$ordersID'
		";

		sql($sql);
        header("location:../index-admin.php");

	}

?>