<?php
	session_start();

	$login = false;
	$f_lock = "hide";
	$l_lock = "";
	$block = "";
	if(isset($_SESSION["userUsername"]) && isset($_SESSION["userID"]))  {
		$userUsername = $_SESSION["userUsername"];
		$userID = $_SESSION["userID"];

		$login = true;
		$f_lock = "";
		$l_lock = "hide";
		$block = "block";
	}

?>