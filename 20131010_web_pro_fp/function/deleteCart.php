<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "GET") {

	}
	else if(!isset($_GET['q']) ) {

	}
	else {
		$cartID = $_GET['q'];

		$sql = "DELETE FROM cart
		WHERE cartID = '$cartID'
		";
        
        sql($sql);
        header("location:../cart.php");

	}

?>