<?php
	session_start();
	$hide = "hide";
	if(isset($_SESSION["userUsername"]) && isset($_SESSION["userID"]))  {
		$userUsername = $_SESSION["userUsername"];
		$userID = $_SESSION["userID"];
		$hide = "";
	}
	else {
		echo "Not login!.";
		echo "<br> Back to <a href='index.php'>Home page</a>";
	}

	//Date
	date_default_timezone_set('Azores');
	$ordersDate = date("Y-n-j, G:i:s");
?>
<?php include 'function/function.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Restaurant reservations.</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="function/function.js" type="text/javascript"></script>
</head>
<body class="<?= $hide ?>">

	<?php 
		if($_SESSION["userLevelName"]=="Admin")
		{
			include 'admin-page.php'; 
		}
		else {
			include 'user-page.php'; 
		}
		

	?>


	<script>
	$(document).ready(function(){

		// Defalue
		$('#Nav-res').css({
			"color":"#fff",
			"background":"#a1ce86",
			"border":"1px solid #a1ce86"
		});
		$('#Nav-orders').css({
			"color":"#a1ce86",
			"background":"#fff",
			"border":"1px solid #a1ce86"
		});
		$('#Nav-member').css({
			"color":"#a1ce86",
			"background":"#fff",
			"border":"1px solid #a1ce86"
		});	
		$('#Nav-name').css({ "font-weight":"bold", "color":"#a1ce86" });


		// Head
		$('#Nav-res').click(function(){
			$('#showRes').slideDown();
			$('#showOrders, #function').slideUp();
			$('#showMember').slideUp();

			$('#Nav-res').css({
				"color":"#fff",
				"background":"#a1ce86",
				"border":"1px solid #a1ce86"
			});
			$('#Nav-orders').css({
				"color":"#a1ce86",
				"background":"#fff",
				"border":"1px solid #a1ce86"
			});
			$('#Nav-member').css({
				"color":"#a1ce86",
				"background":"#fff",
				"border":"1px solid #a1ce86"
			});	
		});
		$('#Nav-orders').click(function(){
			$('#showRes').slideUp();
			$('#showOrders, #function').slideDown();
			$('#showMember').slideUp();

			$('#Nav-res').css({
				"color":"#a1ce86",
				"background":"#fff",
				"border":"1px solid #a1ce86"
			});
			$('#Nav-orders').css({
				"color":"#fff",
				"background":"#a1ce86",
				"border":"1px solid #a1ce86"
			});
			$('#Nav-member').css({
				"color":"#a1ce86",
				"background":"#fff",
				"border":"1px solid #a1ce86"
			});		
		});
		$('#Nav-member').click(function(){
			$('#showRes').slideUp();
			$('#showOrders').slideUp();
			$('#showMember').slideDown();

			$('#Nav-res').css({
				"color":"#a1ce86",
				"background":"#fff",
				"border":"1px solid #a1ce86"
			});
			$('#Nav-orders').css({
				"color":"#a1ce86",
				"background":"#fff",
				"border":"1px solid #a1ce86"
			});	
			$('#Nav-member').css({
				"color":"#fff",
				"background":"#a1ce86",
				"border":"1px solid #a1ce86"
			});			
		});

		// Restaurant
		$('#Nav-name').click(function(){
			$('#Nav-name').css({ "font-weight":"bold", "color":"#a1ce86" });
			$('#Nav-type').css({ "font-weight":"normal", "color":"#000" });
			$('#showResName').slideDown();
			$('#showResType').slideUp();
		});
		$('#Nav-type').click(function(){
			$('#Nav-name').css({ "font-weight":"normal", "color":"#000" });
			$('#Nav-type').css({ "font-weight":"bold", "color":"#a1ce86" });
			$('#showResName').slideUp();
			$('#showResType').slideDown();			
		});

		// cancel function btn
		$('#showAddOrders-cancel').click(function(){
			$('#showAddOrders').fadeOut();
		});
		$('#funcEditOrders-cancel').click(function(){
			$('#funcEditOrders').fadeOut();
		});
		$('#funcDeleteOrders-cancel').click(function(){
			$('#funcDeleteOrders').fadeOut();
		});

		$('#funcEditRes-cancel').click(function(){
			$('#funcEditRes').fadeOut();
		});
		$('#funcDeleteRes-cancel').click(function(){
			$('#funcDeleteRes').fadeOut();
		});
		
		$('#funcEditMember-cancel').click(function(){
			$('#funcEditMember').fadeOut();
		});
		$('#funcDeleteMember-cancel').click(function(){
			$('#funcDeleteMember').fadeOut();
		});

		$('#AddRestaurant-cancel').click(function(){
			$('#AddRestaurant').fadeOut();
		});
		$('#AddOrders-cancel').click(function(){
			$('#AddOrders').fadeOut();
		});
		$('#AddMember-cancel').click(function(){
			$('#AddMember').fadeOut();
		});


		// add function btn
		$('#btn-add-res').click(function(){
			$('#AddRestaurant').fadeIn();
		});
		$('#btn-add-order').click(function(){
			$('#AddOrders').fadeIn();
		});
		$('#btn-add-mem').click(function(){
			$('#AddMember').fadeIn();
		});
		
		
	});
	</script>
</body>
</html>
