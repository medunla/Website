<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "GET") {

	}
	else if(!isset($_GET['q'])) {

	}
	else {
		$productID = $_GET['q'];

		$sql = "DELETE FROM product 
		WHERE productID = '$productID'
		";
        
		sql($sql);
        header("location:../edit_product.php");

	}

?>