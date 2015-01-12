<?php

function uploadImg($data, $type, $num) {

	// Check quantity file
	$dir = "../info/product/" . $type . "/" . $num . ".jpg";
	$link = "info/product/" . $type . "/" . $num . ".jpg";

	// Upload
	if(is_uploaded_file($data['tmp_name'])) {

		if($data['type'] == "image/jpeg" || $data['type'] == "image/png") {	
			move_uploaded_file($data['tmp_name'], $dir); 
		}
		
	}//end if upload

	return $link;
}
function uploadImg2($data, $type) {

	// Check quantity file
    $dir = "../info/product/" . $type . "/*.jpg";
    $num = count(glob($dir)) + 1;
    
	$dir = "../info/product/" . $type . "/" . $num . ".jpg";
	$link = "info/product/" . $type . "/" . $num . ".jpg";

	// Upload
	if(is_uploaded_file($data['tmp_name'])) {

		if($data['type'] == "image/jpeg" || $data['type'] == "image/png") {	
			move_uploaded_file($data['tmp_name'], $dir); 
		}
		
    }//end if upload

	return $link;
}


?>