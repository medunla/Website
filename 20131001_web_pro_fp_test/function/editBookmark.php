<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['bookmarkID-edit']) || !isset($_POST['productID-edit']) ) {

	}
	else {
		$bookmarkID = $_POST['bookmarkID-edit'];
		$productID = $_POST['productID-edit'];

		$sql = "UPDATE bookmark 
		SET productID = '$productID'
		WHERE bookmarkID = '$bookmarkID'
		";
		
        sql($sql);

	}

?>