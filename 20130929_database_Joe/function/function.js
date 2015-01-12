
/* ---------------------------------- Orders ---------------------------------- */

function addOrders(restaurantID, userID, restaurantName, restaurantDiscount) {
	var id = document.getElementById('showAddOrders');

	document.getElementById('funcAddOrders-resID').innerHTML = restaurantID;
	document.getElementById('funcAddOrders-resName').innerHTML = restaurantName;
	document.getElementById('funcAddOrders-resDis').innerHTML = restaurantDiscount;

	document.getElementById('funcAddOrders-retaurantID').value = restaurantID;
	document.getElementById('funcAddOrders-userID').value = userID;

	
	$(id).fadeIn();
}

function updateOrders(ordersID, userID, restaurantID, restaurantName) {
	var id = document.getElementById('funcEditOrders');

	document.getElementById('funcEditOrders-ordersID').innerHTML = ordersID;
	document.getElementById('funcEditOrders-resName').innerHTML = restaurantName;

	document.getElementById('funcEditOrders-ordersIDh').value = ordersID;
	document.getElementById('funcEditOrders-retaurantID').value = restaurantID;
	document.getElementById('funcEditOrders-userID').value = userID;

	$(id).fadeIn();

}

function deleteOrders(ordersID, restaurantName) {
	var id = document.getElementById('funcDeleteOrders');

	document.getElementById('funcDeleteOrders-ordersID').innerHTML = ordersID;
	document.getElementById('funcDeleteOrders-resName').innerHTML = restaurantName;

	document.getElementById('funcDeleteOrders-ordersIDh').value = ordersID;

	$(id).fadeIn();

}

/* ---------------------------------- Restaurant ---------------------------------- */

function updateRes(restaurantID, restaurantName, restaurantLocation, restaurantDiscount, restauranttypeID) {
	var id = document.getElementById('funcEditRes');

	document.getElementById('funcEditRes-resID').innerHTML = restaurantID;

	document.getElementById('funcEditRes-resIDh').value = restaurantID;
	document.getElementById('funcEditRes-resName').value = restaurantName;
	document.getElementById('funcEditRes-resLoc').value = restaurantLocation;
	document.getElementById('funcEditRes-resDis').value = restaurantDiscount;
	document.getElementById('funcEditRes-resTypeID').value = restauranttypeID;

	$(id).fadeIn();

}

function deleteRes(restaurantID, restaurantName) {
	var id = document.getElementById('funcDeleteRes');

	document.getElementById('funcDeleteRes-resID').innerHTML = restaurantID;
	document.getElementById('funcDeleteRes-resName').innerHTML = restaurantName;

	document.getElementById('funcDeleteRes-resIDh').value = restaurantID;

	$(id).fadeIn();

}


/* ---------------------------------- Member ---------------------------------- */

function updateMember(userID, userUsername, userPassword, userName, userSurname, userTel, userAddress, userLevelID) {
	var id = document.getElementById('funcEditMember');

	document.getElementById('funcEditMember-memID').innerHTML = userID;

	document.getElementById('funcEditMember-memIDh').value = userID;
	document.getElementById('funcEditMember-memUser').value = userUsername;
	document.getElementById('funcEditMember-memPass').value = userPassword;
	document.getElementById('funcEditMember-memName').value = userName;
	document.getElementById('funcEditMember-memSur').value = userSurname;
	document.getElementById('funcEditMember-memTel').value = userTel;
	document.getElementById('funcEditMember-memAdd').value = userAddress;
	document.getElementById('funcEditMember-memlvl').value = userLevelID;

	$(id).fadeIn();

}

function deleteMember(userID, userName, userSurname) {
	var id = document.getElementById('funcDeleteMember');

	document.getElementById('funcDeleteMember-memID').innerHTML = userID;
	document.getElementById('funcDeleteMember-memName').innerHTML = userName + " " + userSurname;

	document.getElementById('funcDeleteMember-memIDh').value = userID;

	$(id).fadeIn();

}