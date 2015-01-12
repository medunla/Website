<?php

function uploadPdf($data, $type, $num) {

	$dir = "../info/product/" . $type . "/" . $num . ".pdf";
	$link = "info/product/" . $type . "/" . $num . ".pdf";

	// Upload
	if(is_uploaded_file($data['tmp_name'])) {

		if($data['type'] == "application/pdf") {	
			move_uploaded_file($data['tmp_name'], $dir); 
		}
		
	}//end if upload

	return $link;
}

function uploadPdf2($data, $type) {
    
    // Check quantity file
    $dir = "../info/product/" . $type . "/*.pdf";
    $num = count(glob($dir)) + 1;

	$dir = "../info/product/" . $type . "/" . $num . ".pdf";
	$link = "info/product/" . $type . "/" . $num . ".pdf";

	// Upload
	if(is_uploaded_file($data['tmp_name'])) {

		if($data['type'] == "application/pdf") {	
			move_uploaded_file($data['tmp_name'], $dir); 
		}
		
	}//end if upload

	return $link;
}


?>