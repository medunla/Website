<?php include 'function.php'; ?>
<?php

	$restaurantID = $_POST['restaurantID'];	
	$restaurantName = $_POST['restaurantName'];	
	$restaurantLocation = $_POST['restaurantLocation'];	
	$restaurantDiscount = $_POST['restaurantDiscount'];	
	$restauranttypeID = $_POST['restauranttypeID'];	

	updateRes($restaurantID ,$restaurantName, $restaurantLocation, $restaurantDiscount, $restauranttypeID);

?>