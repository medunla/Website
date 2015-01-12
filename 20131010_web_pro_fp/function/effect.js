window.onload = function() {
	document.getElementById('product-bth').onclick = productEff;
}

function productEff() {
    var item = document.getElementById('product');
    $(item).fadeToggle();
}