<header class="container">
	<div id="logout">
		<fieldset>
			<legend>Account</legend>
			Username : <b><?= $_SESSION["userUsername"] ?></b><br>
			<form action="logout.php" method="POST" enctype="multipart/form-data">
				<input type="submit" value="Logout">
			</form>
		</fieldset>
	</div>

	<div id="Nav-res" class="navigation">Restaurant</div>
	<div id="Nav-orders" class="navigation">Order</div>
	<div id="Nav-member" class="navigation">Member</div>

	<hr class="clear-hr">
</header>

<div class="container">

	<div id="showRes">
		<h1 class="float-l">Restaurant <span>| Add new restaurant</span></h1>
		<img src="img/add-1.png" onmouseover="this.src='img/add-2.png'" onmouseout="this.src='img/add-1.png'" class="icon-add" id="btn-add-res">
		<hr class="clear-hr">

		<div class="float-l clear-l">Order by : </div>
		<div id="Nav-name" class="float-l cursor">Name</div>
		<div class="float-l">/</div>
		<div id="Nav-type" class="float-l cursor">Type</div>

		<hr class="clear-hr">

		<div id="showResName">
			<?= showResNameAdmin(); ?>
		</div>
		<!-- show by name -->

		<hr class="clear-hr">
		
		<div id="showResType">
			<?= showResTypeAdmin(); ?>
		</div>
		<!-- show by type -->

		<hr class="clear-hr">

		<div id="AddRestaurant" class="funcHide">
			<h1>Add restrurant</h1><br>

			<form action="function/addRes.php" method="POST" enctype="multipart/form-data">
				Name : <input type="text" name="restaurantName"><br>
				TypeID : <input type="text" name="restauranttypeID"><br>
				Location : <input type="text" name="restaurantLocation"><br>
				Discount : <input type="text" name="restaurantDiscount"><br>
				<input type="submit" value="Add">
				<input type="button" value="Cancel" id="AddRestaurant-cancel" class="btn-cancel">
			</form>
		</div>
		<!-- end AddRestaurant -->
		
		<div id="funcEditRes" class="funcHide">
			<h1>Edit restrurant</h1><br>

			<form action="function/updateRes.php" method="POST" enctype="multipart/form-data">
				ID : <b id="funcEditRes-resID"> </b><br>
				Name : <input type="text" name="restaurantName" id="funcEditRes-resName"><br>
				TypeID : <input type="text" name="restauranttypeID" id="funcEditRes-resTypeID"><br>
				Location : <input type="text" name="restaurantLocation" id="funcEditRes-resLoc"><br>
				Promotion : <input type="text" name="restaurantDiscount" id="funcEditRes-resDis"><br>
				
				<!-- hide value -->
				<input type="text" name="restaurantID" id="funcEditRes-resIDh" class="hide">

				<input type="submit" value="Update">
				<input type="button" value="Cancel" id="funcEditRes-cancel" class="btn-cancel">
			</form>
		</div>
		<!-- end funcEditRes -->

		<div id="funcDeleteRes" class="funcHide">
			<h1>Delete restaurant</h1><br>

			<form action="function/deleteRes.php" method="POST" enctype="multipart/form-data">
				Delete restaurant : <b id="funcDeleteRes-resID"> </b>, <b id="funcDeleteRes-resName"> </b>!!!!<br>

				<!-- hide value -->
				<input type="text" name="restaurantID" id="funcDeleteRes-resIDh" class="hide">

				<input type="submit" value="Delete">
				<input type="button" value="Cancel" id="funcDeleteRes-cancel" class="btn-cancel">
			</form>
		</div>
		<!-- end funcEditOrders -->

	</div>
	<!-- end showRes -->

	<!-- ---------------------------------------------------------------------------- -->

	<div id="showOrders">
		<h1 class="float-l">Orders <span>| Add new order</span></h1>
		<img src="img/add-1.png" onmouseover="this.src='img/add-2.png'" onmouseout="this.src='img/add-1.png'" class="icon-add" id="btn-add-order">
		<hr class="clear-hr">

		<?= showOrdersAdmin($userUsername); ?>


		<hr class="clear-hr">
			
		<div id="AddOrders" class="funcHide">
			<h1>Add order</h1><br>

			<form action="function/addOrders.php" method="POST" enctype="multipart/form-data">
				restaurantID : <input type="text" name="restaurantID"><br>
				userID : <input type="text" name="userID"><br>
				Amount table : <input type="text" name="orderAmount"><br>
				<input type="submit" value="Add">
				<input type="button" value="Cancel" id="AddOrders-cancel" class="btn-cancel">
			</form>
		</div>
		<!-- end AddOrders -->

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
		<!-- end funcDeleteOrders -->

	</div>
	<!-- end showOrders -->

	<!-- ---------------------------------------------------------------------------- -->

	<div id="showMember">
		<h1 class="float-l">Member <span>| Add new member</span></h1>
		<img src="img/add-1.png" onmouseover="this.src='img/add-2.png'" onmouseout="this.src='img/add-1.png'" class="icon-add" id="btn-add-mem">
		<hr class="clear-hr">

		<?= showMember(); ?>

		<hr class="clear-hr">

		<div id="AddMember" class="funcHide">
			<h1>Add member</h1><br>

			<form action="register.php" method="POST" enctype="multipart/form-data">
				LevelID* : <input type="text" name="userLevelID"><br>
				Username* : <input type="text" name="userUsername"><br>
				Password* : <input type="password" name="userPassword"><br>
				Re-Password* : <input type="password" name="userConPassword"><br>
				<hr class="clear-hr">
				Firstname : <input type="text" name="userName"><br>
				Surname : <input type="text" name="userSurname"><br>
				Tel-phone : <input type="text" name="userTel"><br>
				Address : <input type="text" name="userAddress"><br>

				<input type="submit" value="Add">
				<input type="button" value="Cancel" id="AddMember-cancel" class="btn-cancel">
			</form>
		</div>
		<!-- end AddMember -->
		
		<div id="funcEditMember" class="funcHide">
			<h1>Edit member</h1><br>

			<form action="function/updateMember.php" method="POST" enctype="multipart/form-data">
				ID : <b id="funcEditMember-memID"> </b><br>
				Username : <input type="text" name="userUsername" id="funcEditMember-memUser"><br>
				Password : <input type="text" name="userPassword" id="funcEditMember-memPass"><br>
				Firstname : <input type="text" name="userName" id="funcEditMember-memName"><br>
				Lastname : <input type="text" name="userSurname" id="funcEditMember-memSur"><br>
				Tel. : <input type="text" name="userTel" id="funcEditMember-memTel"><br>
				Address : <input type="text" name="userAddress" id="funcEditMember-memAdd"><br>
				Level : <input type="text" name="userLevelID" id="funcEditMember-memlvl"><br>
				
				<!-- hide value -->
				<input type="text" name="userID" id="funcEditMember-memIDh" class="hide">

				<input type="submit" value="Update">
				<input type="button" value="Cancel" id="funcEditMember-cancel" class="btn-cancel">
			</form>
		</div>
		<!-- end funcEditMember -->

		<div id="funcDeleteMember" class="funcHide">
			<h1>Delete member</h1><br>

			<form action="function/deleteMember.php" method="POST" enctype="multipart/form-data">
				Delete member : <b id="funcDeleteMember-memID"> </b>, <b id="funcDeleteMember-memName"> </b>!!!!<br>

				<!-- hide value -->
				<input type="text" name="userID" id="funcDeleteMember-memIDh" class="hide">

				<input type="submit" value="Delete">
				<input type="button" value="Cancel" id="funcDeleteMember-cancel" class="btn-cancel">
			</form>
		</div>
		<!-- end funcDeleteMember -->

	</div>
	<!-- end showMember -->

	<hr class="clear-hr"><!-- ---------------------------------------------------------------------------- -->

	



</div>
<!-- end container -->
