<?php
	$date = new DateTime("1992-12-8");
    echo $date->format('l');
	echo timezone_name_get($date->getTimezone());

?>