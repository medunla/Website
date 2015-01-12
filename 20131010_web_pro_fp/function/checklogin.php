<?php
	session_start();

	$login = false;
	$f_lock = "hide";
	$l_lock = "";
    $admin_lock = "hide";
	if(isset($_SESSION["userUsername"]) && isset($_SESSION["userID"]) && isset($_SESSION["userLevel"])  )  {
		$userUsername = $_SESSION["userUsername"];
		$userID = $_SESSION["userID"];
        $userLevel = $_SESSION["userLevel"];

		$login = true;
		$f_lock = "";
		$l_lock = "hide";

        if($userLevel == 1) {
            $admin_lock = "";
        }
        

	}

?>