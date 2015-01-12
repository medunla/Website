<?php

class GetInformation {
	private $pathFile = "data/";

	function GetFileName(){
		$filenames = glob( $this->pathFile . "*" );
		return $filenames;
	}
	function GetData($filename) {


		// Step#1 Open file
		$handle = fopen( $filename, "r+");
		// Step#2 Read file and copy content in file to value
		$content = fread($handle, filesize($filename));
		// Step#3 Close file
		fclose($handle);
		// Step#4 Explode content to value
		$contentExplode = explode("%endline%", $content);

		return $contentExplode;
	}
}
 

?>