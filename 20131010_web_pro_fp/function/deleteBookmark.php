<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "GET") {

	}
	else if(!isset($_GET['q']) ) {

	}
	else {
		$bookmarkID = $_GET['q'];

		$sql = "DELETE FROM bookmark
		WHERE bookmarkID = '$bookmarkID'
		";
        
        sql($sql);
        header("location:../bookmark.php");

	}

?>