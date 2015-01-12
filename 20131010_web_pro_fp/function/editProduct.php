<?php
	include 'sql.php';
	include 'uploadImg.php';
	include 'uploadPdf.php';


	// Check sent post
	if($_SERVER["REQUEST_METHOD"] != "POST") {

	}
	else if(!isset($_POST['productID-edit']) || !isset($_POST['productName-edit']) || !isset($_POST['productBrand-edit']) || !isset($_POST['productTypeID-edit']) || !isset($_POST['productDescript-edit']) || !isset($_POST['productQuantity-edit']) || !isset($_POST['productCost-edit']) ) {

	}    
	else {
        $productID = $_POST['productID-edit'];
		$productName = $_POST['productName-edit'];
		$productBrand = $_POST['productBrand-edit'];
		$productTypeID = $_POST['productTypeID-edit'];
		$productDescript = $_POST['productDescript-edit'];
		$productQuantity = $_POST['productQuantity-edit'];
		$productCost = $_POST['productCost-edit'];
        $productImg = $_POST['productImg-edit'];
        $productBrochore = $_POST['productBrochore-edit'];  
    
        
        $sql = "UPDATE product 
        SET productName = '$productName', productBrand = '$productBrand', productTypeID = '$productTypeID', productDescript = '$productDescript', productQuantity = '$productQuantity', productCost = '$productCost', productImg = '$productImg', productBrochore = '$productBrochore'
        WHERE productID = '$productID'
        ";        

		
		sql($sql);
        
        header("location:../edit_product.php");

	}

?>