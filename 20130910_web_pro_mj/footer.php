<?php
if($page=="home"){
	$class_fo = "class=\"footer-home\"";
}
else {
	$class_fo = "";
}

?>
<footer <?= $class_fo ?> >
	<div id="footer-wrapper">
		<div>
			Copyright by <a href="index.php"><span>Rayongtrips</span></a> &nbsp;| &nbsp;Contacts&nbsp;
			<a href="#"><img class="footer-icon" src="img/icons/facebook.png" alt="facebook"></a>
			<a href="#"><img class="footer-icon" src="img/icons/twitter.png" alt="twitter"></a>
			<a href="#"><img class="footer-icon" src="img/icons/gmail.png" alt="gmail"></a>
		</div>
		
	</div>
</footer>

</body>
</html>