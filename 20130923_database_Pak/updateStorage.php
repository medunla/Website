<?php include 'allFunction.php'; ?>
<?php

	$StorageID = $_POST['StorageID'];
	$DrugsID = $_POST['DrugsID'];

	updateStorage($StorageID, $DrugsID);

?>