/*
 *  Function after click button.
 *  --> Sent value in sql to page.
*/

function editProduct(productID, productName, productBrand, productDescript, productQuantity, productTypeID, productCost, productImg, productBrochore) {
    
    document.getElementById('productID-edit').value = productID;   
    document.getElementById('productName-edit').value = productName;
    document.getElementById('productBrand-edit').value = productBrand;
    document.getElementById('productDescript-edit').value = productDescript;
    document.getElementById('productQuantity-edit').value = productQuantity;
    document.getElementById('productTypeID-edit').value = productTypeID;
    document.getElementById('productCost-edit').value = productCost;
    document.getElementById('productImg-edit').value = productImg;
    document.getElementById('productBrochore-edit').value = productBrochore;

}

function deleteProduct(productID) {
    var q = "function/deleteProduct.php?q="+productID;
    
    this.document.location.href = q;   
}

function editUser(userID, userUsername, userPassword, userFname, userLname, userBirth, userAddress, userTel, userMail, userLevel) {

    document.getElementById('userID-edit').value = userID;   
    document.getElementById('userUsername-edit').value = userUsername;
    document.getElementById('userPassword-edit').value = userPassword;
    document.getElementById('userFname-edit').value = userFname;
    document.getElementById('userLname-edit').value = userLname;
    document.getElementById('userBirth-edit').value = userBirth;
    document.getElementById('userAddress-edit').value = userAddress;
    document.getElementById('userTel-edit').value = userTel;
    document.getElementById('userMail-edit').value = userMail;
    document.getElementById('userLevel-edit').value = userLevel;    
}

function deleteUser(userID) {
    
    document.getElementById('userID-delete').value = userID;     
}

function editOrders(ordersID, productID, ordersQuantity, userID) {
    document.getElementById('ordersID-edit').value = ordersID;   
    document.getElementById('productID-edit-o').value = productID;
    document.getElementById('ordersQuantity-edit').value = ordersQuantity;
    document.getElementById('userID-edit').value = userID;    
}

function deleteOrders(ordersID) {
    document.getElementById('ordersID-delete').value = ordersID;   
}

function editBookmark(bookmarkID, userID, productID) {
    document.getElementById('bookmarkID-edit').value = bookmarkID;   
    document.getElementById('userID-edit-b').value = userID;
    document.getElementById('productID-edit-b').value = productID;
    
}

function deleteBookmark(bookmarkID) {
    document.getElementById('bookmarkID-delete').value = bookmarkID;    
}

function editCart(cartID, productID, userID, cartQuantity) {
    document.getElementById('cartID-edit').value = cartID;   
    document.getElementById('userID-edit-c').value = userID;
    document.getElementById('productID-edit-c').value = productID;
    document.getElementById('cartQuantity-edit').value = cartQuantity;    
}

function deleteCart(cartID) {
    var q = "function/deleteCart.php?q="+cartID;
    
    this.document.location.href = q;    
}
