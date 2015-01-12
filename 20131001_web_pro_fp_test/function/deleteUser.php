<?php
	include 'sql.php';

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['userID-delete']) ) {
        echo "d";
	}
	else {
		$userID = $_POST['userID-delete'];

		$sql = "DELETE FROM user
		WHERE userID = '$userID'
		";

		sql($sql);
        
        header("location:../index-admin.php");

	}

?>