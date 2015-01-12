<?php include 'function.php'; ?>
<?php

	$restaurantID = $_POST['restaurantID'];	
	$userID = $_POST['userID'];	
	$orderAmount = $_POST['orderAmount'];	

	addOrders($restaurantID, $userID, $orderAmount);

?>