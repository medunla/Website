<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['productID-delete'])) {

	}
	else {
		$productID = $_POST['productID-delete'];

		$sql = "DELETE FROM product 
		WHERE productID = '$productID'
		";
        
		sql($sql);

	}

?>