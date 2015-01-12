<?php
	include 'sql.php';
	include 'uploadImg.php';
	include 'uploadPdf.php';


	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['productName']) || !isset($_POST['productBrand']) || !isset($_POST['productTypeID']) || !isset($_POST['productDescript']) || !isset($_POST['productQuantity']) || !isset($_POST['productCost']) || !isset($_FILES['productImg']) || !isset($_FILES['productBrochore']) ) {

	}
	else {
		$productName = $_POST['productName'];
		$productBrand = $_POST['productBrand'];
		$productTypeID = $_POST['productTypeID'];
		$productDescript = $_POST['productDescript'];
		$productQuantity = $_POST['productQuantity'];
		$productCost = $_POST['productCost'];
		$productImg = $_FILES['productImg'];
		$productBrochore = $_FILES['productBrochore'];

		$productImg = uploadImg2($productImg, $productTypeID);
		$productBrochore = uploadPdf2($productBrochore, $productTypeID);


		$sql = "INSERT INTO product 
		(productName, productBrand, productTypeID, productDescript, productQuantity, productCost, productImg, productBrochore)
		VALUES ('$productName', '$productBrand', '$productTypeID', '$productDescript', '$productQuantity', '$productCost', '$productImg', '$productBrochore')
		";

		sql($sql);
        
        header("location:../index-admin.php");

	}

?>