<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['cartID-delete']) ) {

	}
	else {
		$cartID = $_POST['cartID-delete'];

		$sql = "DELETE FROM cart
		WHERE cartID = '$cartID'
		";
        
        sql($sql);

	}

?>