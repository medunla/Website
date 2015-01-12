<?php include 'allFunction.php'; ?>
<?php

	$DrugsID = $_POST['DrugsID'];
	$DrugsName = $_POST['DrugsName'];
	$DrugsCategory = $_POST['DrugsCategory'];
	$DrugsCost = $_POST['DrugsCost'];
	

	insertDrugs($DrugsID, $DrugsName, $DrugsCategory, $DrugsCost);

?>