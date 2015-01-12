<header class="container">
	<div id="logout">
		<fieldset>
			<legend>Account</legend>
			Username : <b><?= $_SESSION["userUsername"] ?></b><br>
			Level : <b><?= $_SESSION["userLevelName"] ?></b><br>
			<form action="logout.php" method="POST" enctype="multipart/form-data">
				<input type="submit" value="Logout">
			</form>
		</fieldset>
	</div>

	<div id="Nav-res" class="navigation">Restaurant</div>
	<div id="Nav-orders" class="navigation">Order</div>

	<hr class="clear-hr">
</header>

<div class="container">

	<div id="showRes">
		<h1>Restaurant</h1><br>

		<div class="float-l">Order by : </div>
		<div id="Nav-name" class="float-l cursor">Name</div>
		<div class="float-l">/</div>
		<div id="Nav-type" class="float-l cursor">Type</div>

		<hr class="clear-hr">

		<div id="showResName">
			<?= showResName($userID); ?>
		</div>
		<!-- show by name -->

		<hr class="clear-hr">
		
		<div id="showResType">
			<?= showResType($userID); ?>
		</div>
		<!-- show by type -->

		<hr class="clear-hr">
		
		<div id="showAddOrders" class="funcHide">
			<h1>Add restrurant</h1><br>

			<form action="function/addOrders.php" method="POST" enctype="multipart/form-data">
				RestaurantID : <b id="funcAddOrders-resID"> </b><br>
				Name : <b id="funcAddOrders-resName"> </b><br>
				Promotion : <b id="funcAddOrders-resDis"> </b><br>
				Amount table : <input type="text" name="orderAmount"><br>

				<!-- hide value -->
				<input type="text" name="restaurantID" id="funcAddOrders-retaurantID" class="hide">
				<input type="text" name="userID" id="funcAddOrders-userID" class="hide">

				<input type="submit" value="Add">
				<input type="button" value="Cancel" id="showAddOrders-cancel" class="btn-cancel">
			</form>
		</div>
		<!-- show by type -->

	</div>
	<!-- end showRes -->

	<!-- ---------------------------------------------------------------------------- -->

	<div id="showOrders">
		<h1>Order</h1><br>
			<?= showOrders($userUsername, $userID); ?>


		<hr class="clear-hr">
			
		<div id="funcEditOrders" class="funcHide">
			<h1>Edit order</h1><br>

			<form action="function/updateOrders.php" method="POST" enctype="multipart/form-data">
				OrdersID : <b id="funcEditOrders-ordersID"> </b><br>
				Restaurant Name : <b id="funcEditOrders-resName"> </b><br>
				Amount table : <input type="text" name="orderAmount"><br>

				<!-- hide value -->
				<input type="text" name="ordersID" id="funcEditOrders-ordersIDh" class="hide">
				<input type="text" name="retaurantID" id="funcEditOrders-retaurantID" class="hide">
				<input type="text" name="userID" id="funcEditOrders-userID" class="hide">

				<input type="submit" value="Update">
				<input type="button" value="Cancel" id="funcEditOrders-cancel" class="btn-cancel">
			</form>
		</div>
		<!-- end funcEditOrders -->

		<div id="funcDeleteOrders" class="funcHide">
			<h1>Delete order</h1><br>

			<form action="function/deleteOrders.php" method="POST" enctype="multipart/form-data">
				Delete order : <b id="funcDeleteOrders-ordersID"> </b>, <b id="funcDeleteOrders-resName"> </b>!!!!<br>

				<!-- hide value -->
				<input type="text" name="ordersID" id="funcDeleteOrders-ordersIDh" class="hide">

				<input type="submit" value="Delete">
				<input type="button" value="Cancel" id="funcDeleteOrders-cancel" class="btn-cancel">
			</form>
		</div>
		<!-- end funcEditOrders -->

	</div>
	<!-- end showOrders -->

	<hr class="clear-hr"><!-- ---------------------------------------------------------------------------- -->

	



</div>
<!-- end container -->
