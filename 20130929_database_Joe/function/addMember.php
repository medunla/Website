<?php include 'function.php'; ?>
<?php

	$retaurantID = $_POST['retaurantID'];	
	$userID = $_POST['userID'];	
	$orderAmount = $_POST['orderAmount'];	

	addMember($userID, $userUsername, $userPassword, $userName, $userSurname, $userTel, $userAddress, $userLevelID);

?>