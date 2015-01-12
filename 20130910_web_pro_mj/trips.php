<?php $page="trips"; ?>
<?php include 'header.php'; ?>

<?php
	$head_content = array('Samet island', 'Kao Cha-mao', 'Mun island', 'Soonthornphu monument', 'The Park Adventureland');
	$part_content = glob('trips-content/trips*.html');
?>

<!---------------------------->
<!-------- WOWSlider -------->
<!---------------------------->

<link rel="stylesheet" type="text/css" href="css/wowSilder/style.css" />
<script type="text/javascript" src="css/wowSilder/jquery.js"></script>

<!---------------------------->
<!------ end WOWSlider ------>
<!---------------------------->


<div class="content-wrapper">
	<div class="content-container">

		<!-- icon-page -->
		<div id="content-icon-wrapper">			
			<a href="information.php"><div id="content-icon" class="icon-page">
				<p>i</p>
			</div></a>
			<a href="trips.php"><div id="content-icon" class="icon-page-active">
				<p>t</p>
			</div></a>
			<a href="product.php"><div id="content-icon" class="icon-page">
				<p>p</p>
			</div></a>
			<a href="gallery.php"><div id="content-icon" class="icon-page">
				<p>g</p>
			</div></a>
		</div><!-- end content-icon-wrapper -->		


		<!-- content -->
		<div class="content-article-wrapper">
			<!-- menu -->
			<div id="trips-menu" class="hr content">
				<h1>Choose your trip</h1>
				<div id="menu1" class="trips-menu-menu"><div id="b1" class="bullet">+</div><p><?= $head_content[0] ?></p></div>
				<div id="menu2" class="trips-menu-menu"><div id="b2" class="bullet">+</div><p><?= $head_content[1] ?></p></div>
				<div id="menu3" class="trips-menu-menu"><div id="b3" class="bullet">+</div><p><?= $head_content[2] ?></p></div>
				<div id="menu4" class="trips-menu-menu"><div id="b4" class="bullet">+</div><p><?= $head_content[3] ?></p></div>
				<div id="menu5" class="trips-menu-menu"><div id="b5" class="bullet">+</div><p><?= $head_content[4] ?></p></div>	
			</div>
			
			<!-- information -->
			<div id="trips-information">
				<?php 
					$ii=1; // Set value for use articel
					for($i=0; $i<5; $i++, $ii++) { 
				?>
						<article id="trips-information-<?= $ii ?>" class="content2">	
							<h1><?= $head_content[$i] ?></h1>
							<br>							
						<?php
							foreach( file($part_content[$i]) as $partical ) {
								echo $partical;
							}
						?>
						</article>
				<?php
					} ?>
			</div>
		</div><!-- end content-article-wrapper -->	

		<div class="line-h">&nbsp;</div>
	</div><!-- end content-container -->
</div><!-- end content-wrpper -->


<!-- WOWSlider -->
<script type="text/javascript" src="css/wowSilder/wowslider.js"></script>
<script type="text/javascript" src="css/wowSilder/script.js"></script>

<!-- script show information -->
<script type="text/javascript">
	$(document).ready(function(){

		/* set defalue */
		$('#b1').css({'background':'#fb6a01','color':'#fff','border':'0px'});

		/* click */
	 	$('#menu1').click(function(){
			$('#b1').css({'background':'#fb6a01','color':'#fff','border':'0px'});
			$('#b2').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b3').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b4').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b5').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#trips-information-1').fadeIn();
			$('#trips-information-2').hide();
			$('#trips-information-3').hide();
			$('#trips-information-4').hide();
			$('#trips-information-5').hide();
		});
		$('#menu2').click(function(){
			$('#b1').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b2').css({'background':'#fb6a01','color':'#fff','border':'0px'});
			$('#b3').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b4').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b5').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#trips-information-1').hide();
			$('#trips-information-2').fadeIn();
			$('#trips-information-3').hide();
			$('#trips-information-4').hide();
			$('#trips-information-5').hide();
		});
		$('#menu3').click(function(){
			$('#b1').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b2').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b3').css({'background':'#fb6a01','color':'#fff','border':'0px'});
			$('#b4').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b5').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#trips-information-1').hide();
			$('#trips-information-2').hide();
			$('#trips-information-3').fadeIn();
			$('#trips-information-4').hide();
			$('#trips-information-5').hide();
		});
		$('#menu4').click(function(){
			$('#b1').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b2').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b3').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b4').css({'background':'#fb6a01','color':'#fff','border':'0px'});
			$('#b5').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#trips-information-1').hide();
			$('#trips-information-2').hide();
			$('#trips-information-3').hide();
			$('#trips-information-4').fadeIn();
			$('#trips-information-5').hide();
		});
		$('#menu5').click(function(){
			$('#b1').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b2').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b3').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b4').css({'background':'#e6e6e6','color':'#666269','border':'1px solid #666269'});
			$('#b5').css({'background':'#fb6a01','color':'#fff','border':'0px'});
			$('#trips-information-1').hide();
			$('#trips-information-2').hide();
			$('#trips-information-3').hide();
			$('#trips-information-4').hide();
			$('#trips-information-5').fadeIn();
		});

	});
</script>

<?php include 'footer.php'; ?>