<?php
    
    /*
     *  Query database.
    */

function sql($sql) {

	$conDB = new PDO("mysql:dbname=menshirt;host=localhost", "root", "");
	$conDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$datas = $conDB->query($sql);

}
function sql2($sql) {

	$conDB = new PDO("mysql:dbname=menshirt;host=localhost", "root", "");
	$conDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$datas = $conDB->query($sql);

	return $datas;
}



    /*
     *  Show database user.
    */

function showProduct() {   
    $sql = "SELECT * FROM product";
    $datas = sql2($sql);

    echo "<table>";
    echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>Name</td>";
        echo "<td>Brand</td>";
        echo "<td>Descript</td>";
        echo "<td>Quantity</td>";
        echo "<td>TypeID</td>";
        echo "<td>Cost</td>";
        echo "<td>Img</td>";
        echo "<td>Brochore</td>";
        echo "<td>Edit</td>";
        echo "<td>Delete</td>";
    echo "</tr>";
        foreach ($datas as $data) {	
            $productID = $data['productID'];
            $productName = $data['productName'];
            $productBrand = $data['productBrand'];
            $productDescript = $data['productDescript'];
            $productQuantity = $data['productQuantity'];
            $productTypeID = $data['productTypeID'];
            $productCost = $data['productCost'];
            $productImg = $data['productImg'];
            $productBrochore = $data['productBrochore'];
            echo "<tr>";
                echo "<td>" . $productID . "</td>";
                echo "<td>" . $productName . "</td>";
                echo "<td>" . $productBrand . "</td>";
                echo "<td>" . $productDescript . "</td>";
                echo "<td>" . $productQuantity . "</td>";
                echo "<td>" . $productTypeID . "</td>";
                echo "<td>" . $productCost . "</td>";
                echo "<td>" . $productImg . "</td>";
                echo "<td>" . $productBrochore . "</td>";

                echo "<td onclick=\"editProduct('$productID', '$productName', '$productBrand', '$productDescript', '$productQuantity', '$productTypeID', '$productCost', '$productImg', '$productBrochore')\">Edit</td>";
                echo "<td onclick=\"deleteProduct('$productID')\">Delete</td>";
                
            echo "</tr>";
        }
    echo "</table>";
    
}
function showUser() {   
    $sql = "SELECT * FROM user";
    $datas = sql2($sql);

    echo "<table>";
    echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>Username</td>";
        echo "<td>Password</td>";
        echo "<td>Fname</td>";
        echo "<td>Lname</td>";
        echo "<td>Birth</td>";
        echo "<td>Address</td>";
        echo "<td>Tel</td>";
        echo "<td>Mail</td>";
        echo "<td>Level</td>";
        echo "<td>Edit</td>";
        echo "<td>Delete</td>";
    echo "</tr>";
        foreach ($datas as $data) {	
            $userID = $data['userID'];
            $userUsername = $data['userUsername'];
            $userPassword = $data['userPassword'];
            $userFname = $data['userFname'];
            $userLname = $data['userLname'];
            $userBirth = $data['userBirth'];
            $userAddress = $data['userAddress'];
            $userTel = $data['userTel'];
            $userMail = $data['userMail'];
            $userLevel = $data['userLevel'];
            echo "<tr>";
                echo "<td>" . $userID . "</td>";
                echo "<td>" . $userUsername . "</td>";
                echo "<td>" . $userPassword . "</td>";
                echo "<td>" . $userFname . "</td>";
                echo "<td>" . $userLname . "</td>";
                echo "<td>" . $userFname . "</td>";
                echo "<td>" . $userBirth . "</td>";
                echo "<td>" . $userAddress . "</td>";
                echo "<td>" . $userTel . "</td>";
                echo "<td>" . $userMail . "</td>";
                echo "<td>" . $userLevel . "</td>";

                echo "<td onclick=\"editUser('$userID', '$userUsername', '$userPassword', '$userFname', '$userLname', '$userBirth', '$userAddress', '$userTel', '$userMail', '$userLevel')\">Edit</td>";
                echo "<td onclick=\"deleteUser('$userID')\">Delete</td>";
                
            echo "</tr>";
        }
    echo "</table>";
    
}
function showOrders() {   
    $sql = "SELECT * FROM orders";
    $datas = sql2($sql);

    echo "<table>";
    echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>productID</td>";
        echo "<td>Quantity</td>";
        echo "<td>userID</td>";
        echo "<td>Edit</td>";
        echo "<td>Delete</td>";
    echo "</tr>";
        foreach ($datas as $data) {	
            $ordersID = $data['ordersID'];
            $productID = $data['productID'];
            $ordersQuantity = $data['ordersQuantity'];
            $userID = $data['userID'];
            echo "<tr>";
                echo "<td>" . $ordersID . "</td>";
                echo "<td>" . $productID . "</td>";
                echo "<td>" . $ordersQuantity . "</td>";
                echo "<td>" . $userID . "</td>";

                echo "<td onclick=\"editOrders('$ordersID', '$productID', '$ordersQuantity', '$userID')\">Edit</td>";
                echo "<td onclick=\"deleteOrders('$ordersID')\">Delete</td>";
                
            echo "</tr>";
        }
    echo "</table>";
    
}
function showBookmark() {   
    $sql = "SELECT * FROM bookmark";
    $datas = sql2($sql);

    echo "<table>";
    echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>userID</td>";
        echo "<td>productID</td>";
        echo "<td>Edit</td>";
        echo "<td>Delete</td>";
    echo "</tr>";
        foreach ($datas as $data) {	
            $bookmarkID = $data['bookmarkID'];
            $userID = $data['userID'];
            $productID = $data['productID'];            
            echo "<tr>";
                echo "<td>" . $bookmarkID . "</td>";
                echo "<td>" . $userID . "</td>";
                echo "<td>" . $productID . "</td>";                

                echo "<td onclick=\"editBookmark('$bookmarkID', '$userID', '$productID')\">Edit</td>";
                echo "<td onclick=\"deleteBookmark('$bookmarkID')\">Delete</td>";
                
            echo "</tr>";
        }
    echo "</table>";
    
}
function showCart() {   
    $sql = "SELECT * FROM cart";
    $datas = sql2($sql);

    echo "<table>";
    echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>productID</td>";
        echo "<td>userID</td>";
        echo "<td>cartQuantity</td>";
        echo "<td>Edit</td>";
        echo "<td>Delete</td>";
    echo "</tr>";
        foreach ($datas as $data) {	
            $cartID = $data['cartID'];
            $userID = $data['userID'];
            $productID = $data['productID'];           
            $cartQuantity = $data['cartQuantity'];           
            echo "<tr>";
                echo "<td>" . $cartID . "</td>";
                echo "<td>" . $productID . "</td>";    
                echo "<td>" . $userID . "</td>";
                echo "<td>" . $cartQuantity . "</td>";
                            

                echo "<td onclick=\"editCart('$cartID', '$productID', '$userID', '$cartQuantity')\">Edit</td>";
                echo "<td onclick=\"deleteCart('$cartID')\">Delete</td>";
                
            echo "</tr>";
        }
    echo "</table>";
    
}

?>