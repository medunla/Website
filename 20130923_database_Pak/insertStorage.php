<?php include 'allFunction.php'; ?>
<?php

	$StorageID = $_POST['StorageID'];
	$DrugsID = $_POST['DrugsID'];

	insertStorage($StorageID, $DrugsID);

?>