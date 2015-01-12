<?php include 'function.php'; ?>
<?php

	$restaurantName = $_POST['restaurantName'];
	$restauranttypeName = $_POST['restauranttypeID'];
	$restaurantLocation = $_POST['restaurantLocation'];	
	$restaurantDiscount = $_POST['restaurantDiscount'];	

	addRes($restaurantName, $restaurantLocation, $restaurantDiscount, $restauranttypeID);

?>