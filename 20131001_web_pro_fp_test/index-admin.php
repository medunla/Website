<?php 
	include 'function/sql.php';
	include 'function/checklogin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="function/sqlJs.js" type="text/javascript"></script>
    <script src="function/effect.js" type="text/javascript"></script>
</head>
<body>
    <?php 
        showUser();
        echo "<br><br>";
        showProduct();
        echo "<br><br>";
        showOrders();
        echo "<br><br>";
        showBookmark();
        echo "<br><br>";
        showCart();
        echo "<br><br>";
    ?>
	
	<hr/><br/>

	<div class="<?= $l_lock ?>">
	<form action="loginSystem.php" method="POST" enctype="multipart/form-data">
		Username : <input type="text" name="userUsername"><br/>
		Password : <input type="text" name="userPassword"><br/>
		<input type="submit" value="Login">
	</form>
	</div>

	<div class="<?= $f_lock ?>">
		Username : <?= $userUsername ?>
		<form action="function/logout.php">
			<input type="submit" value="Logout">
		</form>
	</div>

	<hr/><br/> <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->
    
    <input id="product-bth" type="button" />
	<div id="product">
        <h2>Product</h2>
        <form action="function/addProduct.php" method="POST" enctype="multipart/form-data">
            Name : <input type="text" name="productName"><br/>
            Brand : <input type="text" name="productBrand" value="Uniqlo"><br/>
            Type ID : <input type="text" name="productTypeID"><br/>
            Description : <input type="text" name="productDescript"><br/>
            Quantity : <input type="text" name="productQuantity"><br/>
            Cost : <input type="text" name="productCost"><br/>
            Img : <input type="file" name="productImg"><br/>
            Brochore : <input type="file" name="productBrochore"><br/>
            <input type="submit" value="addPro">
        </form>
	</div>
    
    <br/>
    
    <div id="product-edit">
        <form action="function/editProduct.php" method="POST" enctype="multipart/form-data">
            ID : <input type="text" name="productID-edit" id="productID-edit"><br/>
            Name : <input type="text" name="productName-edit" id="productName-edit"><br/>
            Brand : <input type="text" name="productBrand-edit" id="productBrand-edit"><br/>
            Type ID : <input type="text" name="productTypeID-edit" id="productTypeID-edit"><br/>
            Description : <input type="text" name="productDescript-edit" id="productDescript-edit"><br/>
            Quantity : <input type="text" name="productQuantity-edit" id="productQuantity-edit"><br/>
            Cost : <input type="text" name="productCost-edit" id="productCost-edit"><br/>
            Img : <input type="text" name="productImg-edit" id="productImg-edit"><br/>
            Brochore : <input type="text" name="productBrochore-edit" id="productBrochore-edit"><br/>
            <input type="submit" value="Edit">
        </form>    
    </div>
    
    <br/>
    
    <div id="product-delete">
        <form action="function/deleteProduct.php" method="POST" enctype="multipart/form-data">
            ID : <input type="text" name="productID-delete" id="productID-delete"><br/>
            <input type="submit" value="Delete">
        </form>    
    </div>

	<hr/><br/> <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->
    
    <input id="orders-bth" type="button" />
	<div id="orders">
        <h2>Orders</h2>
        <form action="function/addOrders.php" method="POST" enctype="multipart/form-data">
            Product ID : <input type="text" name="productID"><br/>
            Quantity : <input type="text" name="ordersQuantity"><br/>
            User ID : <input type="text" name="userID"><br/>
            <input type="submit" value="addOrders">
        </form>
	</div>
    
    <br/>
    
    <div id="orders-edit">
        <form action="function/editOrders.php" method="POST" enctype="multipart/form-data">
            ID : <input type="text" name="ordersID-edit" id="ordersID-edit"><br/>
            Product ID : <input type="text" name="productID-edit" id="productID-edit-o"><br/>
            Quantity : <input type="text" name="ordersQuantity-edit" id="ordersQuantity-edit"><br/>
            User ID : <input type="text" name="userID-edit" id="userID-edit"><br/>
            <input type="submit" value="Edit">
        </form>
	</div>
    
    <br/>
    
    <div id="orders-delete">
        <form action="function/deleteOrders.php" method="POST" enctype="multipart/form-data">
            ID : <input type="text" name="ordersID-delete" id="ordersID-delete"><br/>
            <input type="submit" value="Delete">
        </form>
	</div>

	<hr/><br/> <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->
    
    <input id="user-bth" type="button" />
	<div id="user">
        <h2>User</h2>
        <form action="function/registerSystem.php" method="POST" enctype="multipart/form-data">
            Username : <input type="text" name="userUsername"><br/>
            Password : <input type="password" name="userPassword"><br/>
            Password : <input type="password" name="userConPassword"><br/>
            <br/>
            Fname : <input type="text" name="userFname"><br/>
            Lname : <input type="text" name="userLname"><br/>
            Birthday : <input type="date" name="userBirth"><br/>
            Address : <input type="text" name="userAddress"><br/>
            Phone : <input type="text" name="userTel"><br/>
            E-mail : <input type="email" name="userMail"><br/>
            <input type="text" name="userLevel"><br/>
            <input type="submit" value="addUser">
        </form>

        <br/>
        
        <form action="function/editUser.php" method="POST" enctype="multipart/form-data">
            ID : <input type="text" name="userID-edit" id="userID-edit"><br/>
            Username : <input type="text" name="userUsername-edit" id="userUsername-edit"><br/>
            Password : <input type="password" name="userPassword-edit" id="userPassword-edit"><br/>
            <br/>
            Fname : <input type="text" name="userFname-edit" id="userFname-edit"><br/>
            Lname : <input type="text" name="userLname-edit" id="userLname-edit"><br/>
            Birthday : <input type="date" name="userBirth-edit" id="userBirth-edit"><br/>
            Address : <input type="text" name="userAddress-edit" id="userAddress-edit"><br/>
            Phone : <input type="text" name="userTel-edit" id="userTel-edit"><br/>
            E-mail : <input type="email" name="userMail-edit" id="userMail-edit"><br/>
            Level : <input type="text" name="userLevel-edit" id="userLevel-edit"><br/>
            <input type="submit" value="Edit">
        </form>
        
        <br/>
        
        <form action="function/deleteUser.php" method="POST" enctype="multipart/form-data">
            ID : <input type="text" name="userID-delete" id="userID-delete"><br/>
            <input type="submit" value="Delete">
            
        </form>
        
	</div>

	<hr/><br/> <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->
    
    <input id="bookmark-bth" type="button" />
	<div id="bookmark">
        <h2>Bookmark</h2>
        <form action="function/addBookmark.php" method="POST" enctype="multipart/form-data">
            Product ID : <input type="text" name="productID"><br/>
            User ID : <input type="text" name="userID"><br/>
            <input type="submit" value="addBookmark">
        </form>
	</div>
    
    <br/>
    
    <div id="bookmark-edit">
        <h2>Bookmark</h2>
        <form action="function/editBookmark.php" method="POST" enctype="multipart/form-data">
            ID : <input type="text" name="bookmarkID-edit" id="bookmarkID-edit"><br/>
            Product ID : <input type="text" name="productID-edit" id="productID-edit-b"><br/>
            User ID : <input type="text" name="userID-edit" id="userID-edit-b"><br/>
            <input type="submit" value="Edit">
        </form>
	</div>
    
    <br/>
    
    <div id="bookmark-delete">
        <h2>Bookmark</h2>
        <form action="function/deleteBookmark.php" method="POST" enctype="multipart/form-data">
            ID : <input type="text" name="bookmarkID-delete" id="bookmarkID-delete"><br/>
            <input type="submit" value="Delete">
        </form>
	</div>
    
    <hr/><br/> <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->
    
    <input id="cart-bth" type="button" />
	<div id="cart">
        <h2>cart</h2>
        <form action="function/addCart.php" method="POST" enctype="multipart/form-data">
            User ID : <input type="text" name="userID"><br/>
            Product ID : <input type="text" name="productID"><br/>
            Cart Quantity : <input type="text" name="cartQuantity"><br/>
            <input type="submit" value="add">
        </form>
	</div>
    
    <br/>
    
    <div id="cart-edit">
        <form action="function/editCart.php" method="POST" enctype="multipart/form-data">
            ID : <input type="text" name="cartID-edit" id="cartID-edit"><br/>
            User ID : <input type="text" name="userID-edit" id="userID-edit-c"><br/>
            Product ID : <input type="text" name="productID-edit" id="productID-edit-c"><br/>            
            Cart Quantity : <input type="text" name="cartQuantity-edit" id="cartQuantity-edit"><br/>
            <input type="submit" value="Edit">
        </form>
	</div>
    
    <br/>
    
    <div id="cart-delete">
         <form action="function/deleteCart.php" method="POST" enctype="multipart/form-data">
            ID : <input type="text" name="cartID-delete" id="cartID-delete"><br/>
            <input type="submit" value="Delete">
        </form>
	</div>
	

</body>
</html>