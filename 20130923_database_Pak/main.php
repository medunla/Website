<?php
	session_start();
	$hide = "hide";
	if(isset($_SESSION["Username"]))  {
		$hide = "";
	}
	else {
		echo "Not login!.";
		echo "<br> Go to <a href='index.php'>Home page</a>";
	}

?>
<?php include 'allFunction.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Drugs-storage</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>

	<div id="container" class="<?= $hide ?>">

		<div id="logout">
			<fieldset>
				<legend>Account</legend>
				ID : <?= $_SESSION["Username"] ?>
				<form action="logout.php" method="POST" enctype="multipart/form-data">
					<input type="submit" value="Logout">
				</form>
			</fieldset>
		</div>

		<div id="showStorage">
			<h1>Storage</h1><br>
			<?= showStorage(); ?>
		</div>
		<!-- end showStorage -->

		<div id="showDrugs">
			<h1>Drugs</h1><br>
			<?= showDrugs(); ?>
		</div>
		<!-- end showDruge -->

		<hr class="clear-hr">

		<div id="funcStorage">
			<h1>Function Storage</h1><br>

			<form action="insertStorage.php" method="POST" enctype="multipart/form-data">
				<fieldset>
					<legend>Add storage</legend><br>
					StorageID : <input type="text" name="StorageID" ><br>
					DrugsID : <input type="text" name="DrugsID" ><br>
					<input type="submit" value="Add" >
				</fieldset>
			</form>
			<br>

			<form action="updateStorage.php" method="POST" enctype="multipart/form-data">
				<fieldset>
					<legend>Update storage</legend><br>
					From StorageID : <input type="text" name="StorageID" ><br>
					Update DrugsID : <input type="text" name="DrugsID" ><br>
					<input type="submit" value="Update" >
				</fieldset>
			</form>
			<br>

			<form action="deleteStorage.php" method="POST" enctype="multipart/form-data">
				<fieldset>
					<legend>Delete storage</legend><br>
					Delete from StorageID : <input type="text" name="StorageID" ><br>
					<input type="submit" value="Delete" >
				</fieldset>
			</form>
			<br>

		</div>
		<!-- end funcStorage -->
		<div id="funcDrugs">
			<h1>Function Drugs</h1><br>

			<form action="insertDrugs.php" method="POST" enctype="multipart/form-data">
				<fieldset>
					<legend>Add drugs</legend><br>
					DrugsID : <input type="text" name="DrugsID" ><br>
					DrugsName : <input type="text" name="DrugsName" ><br>
					DrugsCategory : <input type="text" name="DrugsCategory" ><br>
					DrugsCost : <input type="text" name="DrugsCost" ><br>
					<input type="submit" value="Add" >
				</fieldset>
			</form>
			<br>

			<form action="updateDrugs.php" method="POST" enctype="multipart/form-data">
				<fieldset>
					<legend>Update drugs</legend><br>
					From DrugsID : <input type="text" name="DrugsID" ><br>
					DrugsName : <input type="text" name="DrugsName" ><br>
					DrugsCategory : <input type="text" name="DrugsCategory" ><br>
					DrugsCost : <input type="text" name="DrugsCost" ><br>
					<input type="submit" value="Update" >
				</fieldset>
			</form>
			<br>

			<form action="deleteDrugs.php" method="POST" enctype="multipart/form-data">
				<fieldset>
					<legend>Delete drugs</legend><br>
					Delete from DrugsID : <input type="text" name="DrugsID" ><br>
					<input type="submit" value="Delete" >
				</fieldset>
			</form>
			<br>

		</div>
		<!-- end funcDrugs -->

		<hr class="clear-hr">


	</div>
	<!-- end container -->
</body>
</html>
