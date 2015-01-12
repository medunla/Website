<?php
	session_start();
	include 'sql.php';
	

	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['userUsername']) || !isset($_POST['userPassword']) ) {

	}
	else {
		$userUsername = $_POST['userUsername'];
		$userPassword = $_POST['userPassword'];
		$userLevel = 0;

		$sql = "SELECT * FROM user 
		WHERE userUsername = '$userUsername' and 
		userPassword = '$userPassword'
		";
		$datas = sql2($sql);

		$checkrepeat = true;
		foreach ($datas as $data) {
			if($userUsername == $data['userUsername'] && $userPassword == $data['userPassword']) {
				$checkrepeat = false;
				$userLevel = $data['userLevel'];
                $userID = $data['userID'];
			}
		}

		if($checkrepeat) {

		}
		else {
			$_SESSION['userUsername'] = $userUsername;
			$_SESSION['userID'] = $userID;

			if($userLevel == 1) {
				header("location:../index-admin.php");
			}
			elseif($userLevel == 2) {
				header("location:../index.php");
			}
			else {
				echo $userLevel;
			}
		}

	}

?>