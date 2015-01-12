<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['bookmarkID-delete']) ) {

	}
	else {
		$bookmarkID = $_POST['bookmarkID-delete'];

		$sql = "DELETE FROM bookmark
		WHERE bookmarkID = '$bookmarkID'
		";
        
        sql($sql);

	}

?>