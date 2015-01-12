<?php

// STROGE

// ------------------------------------------------------ SHOW ALL ------------------------------------------------------
function showStorage() {

	// Create connection
	$con_db = mysql_connect("localhost", "admin", "admin");

	// Check connection
	if (mysqli_connect_errno($con_db))  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}

	// Query data
	$sql = 'SELECT Storage.StorageID, Storage.DrugsID, Drugs.DrugsName, Drugs.DrugsCategory, Count(Storage.DrugsID) AS CountOfDrugsID, Sum(Drugs.DrugsCost) AS SumOfDrugsCost
	FROM Storage 
	INNER JOIN Drugs ON Storage.DrugsID = Drugs.DrugsID 
	GROUP BY Storage.DrugsID, Drugs.DrugsName, Drugs.DrugsCategory';

	mysql_select_db('clinic');
	$Show = mysql_query( $sql, $con_db );
	$Show2 = mysql_query( $sql, $con_db );
	if(! $Show )
	{
	  die('Could not get data: ' . mysql_error());
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}
?>
	<table>
		<tr>
			<th>DrugsID</th>
			<th>DrugsName</th>
			<th>DrugsCategory</th>
			<th>Amount</th>
			<th>Total cost</th>
		</tr>
<?php
		while($row = mysql_fetch_array($Show, MYSQL_ASSOC))
		{
?>
			<tr>
				<td><?= $row['DrugsID'] ?></td>
				<td><?= $row['DrugsName'] ?></td>
				<td><?= $row['DrugsCategory'] ?></td>
				<td><?= $row['CountOfDrugsID'] ?></td>
				<td><?= $row['SumOfDrugsCost'] ?></td>
			</tr>
<?php
		}
?>

	</table>
	<div style="opacity:0;">1</div>
	<table>
		<tr>
			<th>StorageID</th>
			<th>DrugsID</th>			
		</tr>
<?php
		while($row = mysql_fetch_array($Show2, MYSQL_ASSOC))
		{
?>
			<tr>
				<td><?= $row['StorageID'] ?></td>
				<td><?= $row['DrugsID'] ?></td>
			</tr>
<?php
		}
?>
	</table>
<?php

	mysql_close($con_db);

}

// ------------------------------------------------------ DELETE ------------------------------------------------------

function deleteStorage($StorageID) {

	// Create connection
	$con_db = mysql_connect("localhost", "admin", "admin");

	// Check connection
	if (mysqli_connect_errno($con_db))  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}

	// Query data
	$sql = "DELETE FROM Storage WHERE StorageID='$StorageID'";

	mysql_select_db('clinic');
	$Show = mysql_query( $sql, $con_db );
	if(! $Show )
	{
	  die('Could not get data: ' . mysql_error());
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}
	header("location:main.php");

	mysql_close($con_db);

}

// ------------------------------------------------------ UPDATE ------------------------------------------------------
function updateStorage($StorageID, $DrugsID) {

	// Create connection
	$con_db = mysql_connect("localhost", "admin", "admin");

	// Check connection
	if (mysqli_connect_errno($con_db))  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}

	// Query data
	$sql = "UPDATE Storage SET DrugsID = '$DrugsID' WHERE StorageID='$StorageID'";

	mysql_select_db('clinic');
	$Show = mysql_query( $sql, $con_db );
	if(! $Show )
	{
	  die('Could not get data: ' . mysql_error());
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	} 
	header("location:main.php");

	mysql_close($con_db);

}

// ------------------------------------------------------ INSERT ------------------------------------------------------
function insertStorage($StorageID, $DrugsID) {

	// Create connection
	$con_db = mysql_connect("localhost", "admin", "admin");

	// Check connection
	if (mysqli_connect_errno($con_db))  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}

	// Query data
	$sql = "INSERT INTO Storage (StorageID, DrugsID) VALUES ('$StorageID', '$DrugsID')";

	mysql_select_db('clinic');
	$Show = mysql_query( $sql, $con_db );
	if(! $Show )
	{
	  die('Could not get data: ' . mysql_error());
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}
	header("location:main.php");

	mysql_close($con_db);

}
















// DRUGS

// ------------------------------------------------------ SHOW DRUGS ------------------------------------------------------
function showDrugs() {

	// Create connection
	$con_db = mysql_connect("localhost", "admin", "admin");

	// Check connection
	if (mysqli_connect_errno($con_db))  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}

	// Query data
	$sql = 'SELECT * FROM Drugs';

	mysql_select_db('clinic');
	$Show = mysql_query( $sql, $con_db );
	if(! $Show )
	{
	  die('Could not get data: ' . mysql_error());
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}
?>
	<table>
		<tr>
			<th>DrugsID</th>
			<th>DrugsName</th>
			<th>DrugsCategory</th>
			<th>DrugsCost</th>
		</tr>
<?php
		while($row = mysql_fetch_array($Show, MYSQL_ASSOC))
		{
?>
			<tr>
				<td><?= $row['DrugsID'] ?></td>
				<td><?= $row['DrugsName'] ?></td>
				<td><?= $row['DrugsCategory'] ?></td>
				<td><?= $row['DrugsCost'] ?></td>
			</tr>
<?php
		}
?>
	</table>
<?php

	mysql_close($con_db);

}


// ------------------------------------------------------ DELETE ------------------------------------------------------

function deleteDrugs($DrugsID) {

	// Create connection
	$con_db = mysql_connect("localhost", "admin", "admin");

	// Check connection
	if (mysqli_connect_errno($con_db))  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}

	// Query data
	$sql = "DELETE FROM Drugs WHERE DrugsID='$DrugsID'";
	
	mysql_select_db('clinic');
	$Show = mysql_query( $sql, $con_db );
	if(! $Show )
	{
	  die('Could not get data: ' . mysql_error());
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}
	header("location:main.php");

	mysql_close($con_db);

}

// ------------------------------------------------------ UPDATE ------------------------------------------------------
function updateDrugs($DrugsID, $DrugsName, $DrugsCategory, $DrugsCost) {

	// Create connection
	$con_db = mysql_connect("localhost", "admin", "admin");

	// Check connection
	if (mysqli_connect_errno($con_db))  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}

	// Query data
	$sql = "UPDATE Drugs SET DrugsName = '$DrugsName', DrugsCategory = '$DrugsCategory', DrugsCost = '$DrugsCost' WHERE DrugsID='$DrugsID'";
	
	mysql_select_db('clinic');
	$Show = mysql_query( $sql, $con_db );
	if(! $Show )
	{
	  die('Could not get data: ' . mysql_error());
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}
	header("location:main.php");

	mysql_close($con_db);

}

// ------------------------------------------------------ INSERT ------------------------------------------------------
function insertDrugs($DrugsID, $DrugsName, $DrugsCategory, $DrugsCost) {

	// Create connection
	$con_db = mysql_connect("localhost", "admin", "admin");

	// Check connection
	if (mysqli_connect_errno($con_db))  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}

	// Query data
	$sql = "INSERT INTO Drugs (DrugsID, DrugsName, DrugsCategory, DrugsCost) VALUES ('$DrugsID', '$DrugsName', '$DrugsCategory', '$DrugsCost')";

	mysql_select_db('clinic');
	$Show = mysql_query( $sql, $con_db );
	if(! $Show )
	{
	  die('Could not get data: ' . mysql_error());
	  echo "<br> Go to <a href='main.php'>Main page</a>";
	}
	header("location:main.php");

	mysql_close($con_db);

}

?>