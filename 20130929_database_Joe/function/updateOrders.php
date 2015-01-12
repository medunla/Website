<?php include 'function.php'; ?>
<?php

	$ordersID = $_POST['ordersID'];	
	$retaurantID = $_POST['retaurantID'];	
	$userID = $_POST['userID'];	
	$orderAmount = $_POST['orderAmount'];	

	updateOrders($ordersID, $retaurantID, $userID, $orderAmount);

?>