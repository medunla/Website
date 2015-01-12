<?php include 'function.php'; ?>
<?php

	$$userID = $_POST['$userID'];	
	$$userUsername = $_POST['$userUsername'];	
	$userPassword = $_POST['userPassword'];	
	$userName = $_POST['userName'];	
	$userSurname = $_POST['userSurname'];	
	$userTel = $_POST['userTel'];	
	$userAddress = $_POST['userAddress'];	
	$userLevelID = $_POST['userLevelID'];	

	updateMember($userID, $userUsername, $userPassword, $userName, $userSurname, $userTel, $userAddress, $userLevelID);

?>