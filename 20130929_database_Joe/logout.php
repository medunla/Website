<?php
	session_start();
	unset ( $_SESSION['userUsername'] );
	unset ( $_SESSION['userID'] );

	session_destroy();
	header("location:index.html");
?>