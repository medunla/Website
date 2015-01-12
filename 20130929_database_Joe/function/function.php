<?php

// ----------------------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------- restaurant ---------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------------------



// Show restaurant by Name 
function showResName($userID) {
	showRes('restaurantName', $userID);
}

// Show restaurant by Type
function showResType($userID) {
	showRes('restaurantTypeName', $userID);
}

// Show restaurant by Name admin
function showResNameAdmin() {
	showResAdmin('restaurantName');
}

// Show restaurant by Type admin
function showResTypeAdmin() {
	showResAdmin('restaurantTypeName');
}

// Function show restaurant
function showRes($type, $userID) {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}

	// Query data
	$sql = "SELECT *
	FROM restaurant
	INNER JOIN restauranttype ON restaurant.restauranttypeID = restauranttype.restauranttypeID
	ORDER BY $type
	";	

	$sqlQuery = mysql_query( $sql, $con );

	if(!$sqlQuery )	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
?>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Type</th>
			<th>Location</th>
			<th>Promotion</th>
		</tr>
<?php
		while($data = mysql_fetch_array($sqlQuery, MYSQL_ASSOC))
		{
			$restaurantID = $data['restaurantID'];
			$restaurantName = $data['restaurantName'];
			$restaurantDiscount = $data['restaurantDiscount'];

?>
			<tr class="tr" onclick="addOrders('<?= $restaurantID ?>', '<?= $userID ?>', '<?= $restaurantName ?>', '<?= $restaurantDiscount ?>')">
				<td><?= $data['restaurantID'] ?></td>
				<td><?= $data['restaurantName'] ?></td>
				<td><?= $data['restauranttypeName'] ?></td>
				<td><?= $data['restaurantLocation'] ?></td>
				<td><?= $data['restaurantDiscount'] ?></td>
			</tr>
<?php
		}
?>
	</table>
<?php

	mysql_close($con);

}

// -----------------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------------


// Function show restaurant admin
function showResAdmin($type) {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}

	// Query data
	$sql = "SELECT *
	FROM restaurant
	INNER JOIN restauranttype ON restaurant.restauranttypeID = restauranttype.restauranttypeID
	ORDER BY $type
	";	

	$sqlQuery = mysql_query( $sql, $con );

	if(!$sqlQuery )	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
?>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Type</th>
			<th>Location</th>
			<th>Promotion</th>
		</tr>
<?php
		while($data = mysql_fetch_array($sqlQuery, MYSQL_ASSOC))
		{
			$restaurantID = $data['restaurantID'];
			$restaurantName = $data['restaurantName'];
			$restaurantLocation = $data['restaurantLocation'];
			$restaurantDiscount = $data['restaurantDiscount'];
			$restauranttypeID = $data['restauranttypeID'];

?>
			<tr>
				<td><?= $data['restaurantID'] ?></td>
				<td><?= $data['restaurantName'] ?></td>
				<td><?= $data['restauranttypeName'] ?></td>
				<td><?= $data['restaurantLocation'] ?></td>
				<td><?= $data['restaurantDiscount'] ?></td>
				<td class="td" onclick="updateRes('<?= $restaurantID ?>', '<?= $restaurantName ?>', '<?= $restaurantLocation ?>', '<?= $restaurantDiscount ?>', '<?= $restauranttypeID ?>')" >
					<img src="img/edit-1.png" onmouseover="this.src='img/edit-2.png'" onmouseout="this.src='img/edit-1.png'" class="icon">
				</td>
				<td class="td"  onclick="deleteRes('<?= $restaurantID ?>', '<?= $restaurantName ?>')" >
					<img src="img/delete-1.png" onmouseover="this.src='img/delete-2.png'" onmouseout="this.src='img/delete-1.png'" class="icon">
				</td>
			</tr>
<?php
		}
?>
	</table>
<?php

	mysql_close($con);

}

// -----------------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------------


// Add restaurant
function addRes($restaurantName, $restaurantLocation, $restaurantDiscount, $restauranttypeID) {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Go to <a href='container.php'>Main page</a>";
	}

	// Query data
	$sql = "INSERT INTO restaurant (restaurantName, restaurantLocation, restaurantDiscount, restauranttypeID) 
	VALUES ('$restaurantName', '$restaurantLocation', '$restaurantDiscount', '$restauranttypeID')";

	$sqlQuery = mysql_query( $sql, $con );
	if(!$sqlQuery )	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
	header("location:../container.php");

	mysql_close($con);

}

// -----------------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------------

// Delete restaurant
function deleteRes($restaurantID) {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Go to <a href='container.php'>Main page</a>";
	}

	// Query data
	$sql = "DELETE FROM restaurant WHERE restaurantID='$restaurantID'";

	$sqlQuery = mysql_query( $sql, $con );
	if(!$sqlQuery )
	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
	header("location:../container.php");

	mysql_close($con);

}

// -----------------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------------


// Update restaurant
function updateRes($restaurantID ,$restaurantName, $restaurantLocation, $restaurantDiscount, $restauranttypeID) {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Go to <a href='container.php'>Main page</a>";
	}

	// Query data
	$sql = "UPDATE restaurant 
	SET restaurantName = '$restaurantName', restaurantLocation = '$restaurantLocation', restaurantDiscount = '$restaurantDiscount', restauranttypeID = '$restauranttypeID'
	WHERE restaurantID='$restaurantID'
	";

	$sqlQuery = mysql_query( $sql, $con );
	if(!$sqlQuery )
	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
	header("location:../container.php");

	mysql_close($con);

}









// ----------------------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------- orders ----------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------------------


// Show orders
function showOrders($userUsername, $userID) {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}

	// Query data
	$sql = "SELECT * FROM (orders
	INNER JOIN restaurant ON orders.restaurantID = restaurant.restaurantID)
	INNER JOIN user ON orders.userID = user.userID
	WHERE user.userUsername = '$userUsername'
	ORDER BY orders.ordersDate DESC, orders.ordersID DESC
	";	

	$sqlQuery = mysql_query( $sql, $con );

	if(!$sqlQuery )	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
?>
	<table>
		<tr>
			<th>OrderID</th>			
			<th>Restaurant Name</th>
			<th>Date</th>
			<th>Amount</th>
		</tr>
<?php
		while($data = mysql_fetch_array($sqlQuery, MYSQL_ASSOC))
		{
			$update_ordersID = $data['ordersID'];
			$update_restaurantID = $data['restaurantID'];
			$update_restaurantName = $data['restaurantName'];
?>
			<tr>
				<td><?= $data['ordersID'] ?></td>				
				<td><?= $data['restaurantName'] ?></td>
				<td><?= $data['ordersDate'] ?></td>
				<td><?= $data['ordersAmount'] ?></td>
				<td class="td" onclick="updateOrders('<?= $update_ordersID ?>', '<?= $userID ?>', '<?= $update_restaurantID ?>', '<?= $update_restaurantName ?>')">
					<img src="img/edit-1.png" onmouseover="this.src='img/edit-2.png'" onmouseout="this.src='img/edit-1.png'" class="icon">
				</td>
				<td class="td" onclick="deleteOrders('<?= $update_ordersID ?>', '<?= $update_restaurantName ?>')">
					<img src="img/delete-1.png" onmouseover="this.src='img/delete-2.png'" onmouseout="this.src='img/delete-1.png'" class="icon">
				</td>				
			</tr>
<?php
		}
?>
	</table>
<?php

	mysql_close($con);

}

// -----------------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------------


// Show orders Admin
function showOrdersAdmin() {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}

	// Query data
	$sql = "SELECT * FROM (orders
	INNER JOIN restaurant ON orders.restaurantID = restaurant.restaurantID)
	INNER JOIN user ON orders.userID = user.userID
	ORDER BY orders.ordersDate DESC, orders.ordersID DESC
	";	

	$sqlQuery = mysql_query( $sql, $con );

	if(!$sqlQuery )	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
?>
	<table>
		<tr>
			<th>OrderID</th>			
			<th>UserID</th>
			<th>Name</th>
			<th>Restaurant Name</th>
			<th>Date</th>
			<th>Amount</th>

		</tr>
<?php
		while($data = mysql_fetch_array($sqlQuery, MYSQL_ASSOC))
		{
			$update_ordersID = $data['ordersID'];
			$update_restaurantID = $data['restaurantID'];
			$update_restaurantName = $data['restaurantName'];
			$update_userID = $data['userID'];
?>
			<tr>
				<td><?= $data['ordersID'] ?></td>				
				<td><?= $data['userID'] ?></td>
				<td><?= $data['userName'] ?> <?= $data['userSurname'] ?></td>
				<td><?= $data['restaurantName'] ?></td>
				<td><?= $data['ordersDate'] ?></td>
				<td><?= $data['ordersAmount'] ?></td>
				<td class="td" onclick="updateOrders('<?= $update_ordersID ?>', '<?= $update_userID ?>', '<?= $update_restaurantID ?>', '<?= $update_restaurantName ?>')">
					<img src="img/edit-1.png" onmouseover="this.src='img/edit-2.png'" onmouseout="this.src='img/edit-1.png'" class="icon">
				</td>
				<td class="td" onclick="deleteOrders('<?= $update_ordersID ?>', '<?= $update_restaurantName ?>')">
					<img src="img/delete-1.png" onmouseover="this.src='img/delete-2.png'" onmouseout="this.src='img/delete-1.png'" class="icon">
				</td>
			</tr>
<?php
		}
?>
	</table>
<?php

	mysql_close($con);

}

// -----------------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------------


// Add orders
function addOrders($restaurantID, $userID, $ordersAmount) {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Go to <a href='container.php'>Main page</a>";
	}

	//Date
	date_default_timezone_set('Azores');
	$ordersDate = date("Y-n-j, G:i:s");

	// Query data
	$sql = "INSERT INTO orders (restaurantID, userID, ordersDate, ordersAmount) 
	VALUES ('$restaurantID', '$userID', '$ordersDate', '$ordersAmount')";

	$sqlQuery = mysql_query( $sql, $con );
	if(!$sqlQuery )	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
	header("location:../container.php");

	mysql_close($con);

}

// -----------------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------------

// Delete orders
function deleteOrders($ordersID) {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Go to <a href='container.php'>Main page</a>";
	}

	// Query data
	$sql = "DELETE FROM orders WHERE ordersID='$ordersID'";

	$sqlQuery = mysql_query( $sql, $con );
	if(!$sqlQuery )
	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
	header("location:../container.php");

	mysql_close($con);

}

// -----------------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------------


// Update orders
function updateOrders($ordersID, $restaurantID, $userID, $ordersAmount) {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Go to <a href='container.php'>Main page</a>";
	}

	//Date
	date_default_timezone_set('Azores');
	$ordersDate = date("Y-n-j, G:i:s");

	// Query data
	$sql = "UPDATE orders 
	SET restaurantID = '$restaurantID', userID = '$userID', ordersDate = '$ordersDate', ordersAmount = '$ordersAmount'
	WHERE ordersID='$ordersID'
	";

	$sqlQuery = mysql_query( $sql, $con );
	if(!$sqlQuery )
	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
	header("location:../container.php");

	mysql_close($con);

}









// ----------------------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------- member ----------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------------------


// Show member
function showMember() {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}

	// Query data
	$sql = "SELECT * FROM user
	INNER JOIN userlevel ON user.userLevelID = userlevel.userLevelID
	ORDER BY user.userID DESC
	";	

	$sqlQuery = mysql_query( $sql, $con );

	if(!$sqlQuery )	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
?>
	<table>
		<tr>
			<th>UserID</th>			
			<th>Usermame</th>
			<th>Password</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Tel.</th>
			<th>Address</th>
			<th>Level</th>
		</tr>
<?php
		while($data = mysql_fetch_array($sqlQuery, MYSQL_ASSOC))
		{
			$userID = $data['userID'];
			$userUsername = $data['userUsername'];
			$userPassword = $data['userPassword'];
			$userName = $data['userName'];
			$userSurname = $data['userSurname'];
			$userTel = $data['userTel'];
			$userAddress = $data['userAddress'];
			$userLevelID = $data['userLevelID'];
?>
			<tr>
				<td><?= $data['userID'] ?></td>				
				<td><?= $data['userUsername'] ?></td>
				<td><?= $data['userPassword'] ?></td>
				<td><?= $data['userName'] ?></td>
				<td><?= $data['userSurname'] ?></td>
				<td><?= $data['userTel'] ?></td>
				<td><?= $data['userAddress'] ?></td>
				<td><?= $data['userLevelName'] ?></td>	
				<td class="td" onclick="updateMember('<?= $userID ?>', '<?= $userUsername ?>', '<?= $userPassword ?>', '<?= $userName ?>', '<?= $userSurname ?>', '<?= $userTel ?>', '<?= $userAddress ?>', '<?= $userLevelID ?>')">
					<img src="img/edit-1.png" onmouseover="this.src='img/edit-2.png'" onmouseout="this.src='img/edit-1.png'" class="icon">
				</td>
				<td class="td" onclick="deleteMember('<?= $userID ?>', '<?= $userName ?>', '<?= $userSurname ?>')" >
					<img src="img/delete-1.png" onmouseover="this.src='img/delete-2.png'" onmouseout="this.src='img/delete-1.png'" class="icon">
				</td>			
			</tr>
<?php
		}
?>
	</table>
<?php

	mysql_close($con);

}

// -----------------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------------


// Delete 
function deleteMember($userID) {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Go to <a href='container.php'>Main page</a>";
	}

	// Query data
	$sql = "DELETE FROM user WHERE userID='$userID'";

	$sqlQuery = mysql_query( $sql, $con );
	if(!$sqlQuery )
	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
	header("location:../container.php");

	mysql_close($con);

}

// -----------------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------------


// Update orders
function updateMember($userID, $userUsername, $userPassword, $userName, $userSurname, $userTel, $userAddress, $userLevelID) {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Go to <a href='container.php'>Main page</a>";
	}

	//Date
	date_default_timezone_set('Azores');
	$ordersDate = date("Y-n-j, G:i:s");

	// Query data
	$sql = "UPDATE user 
	SET userUsername = '$userUsername', userPassword = '$userPassword', userName = '$userName', userSurname = '$userSurname', userTel = '$userTel', userAddress = '$userAddress', userLevelID = '$userLevelID'
	WHERE userID='$userID'
	";

	$sqlQuery = mysql_query( $sql, $con );
	if(!$sqlQuery )
	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
	header("location:../container.php");

	mysql_close($con);

}






















// Add orders
function addResType($r) {

	// Create connection
	$con = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('restaurant');

	// Check connection
	if (mysqli_connect_errno($con))  {
	  echo "Failed to connect to MySQL: ";
	  echo mysqli_connect_error();
	  echo "<br> Go to <a href='container.php'>Main page</a>";
	}

	// Query data
	$sql = "INSERT INTO restauranttype (restauranttypeName) 
	VALUES ('$r')";

	$sqlQuery = mysql_query( $sql, $con );
	if(!$sqlQuery )	{
	  echo "Could not get data: ";
	  echo mysql_error();
	  echo "<br> Back to <a href='container.php'>Main page</a>";
	}
	header("location:../container.php");

	mysql_close($con);

}