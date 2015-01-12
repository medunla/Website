<?php
	include("head.php");

	/* check not login */
	if(isset($_POST['username'])|| isset($_COOKIE['username'])) { $dis=""; echo "string";}
	else { $dis="disabled"; echo "string2";}
?>

<!------------------>
<!---- fancybox ---->
<!------------------>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="css/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="css/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="css/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="css/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="css/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!---------------------->
<!---- end fancybox ---->
<!---------------------->


	<div id="menu">
		<div id="menu-wrapper">

				<div id="menu_menu"><a href="index.php" class="navigation">HOME</a></div>
				<div id="menu_menu"><a href="history.php" class="navigation">HISTORY</a></div>
				<div id="menu_menu"><a href="attractions.php" class="navigation">ATTRACTIONS</a></div>
				<div id="menu_menu"><a href="souvenir.php" class="navigation">SOUVENIR</a></div>
				<div id="menu_menu"><a href="gallery.php" class="visitt">GALLERY</a></div>
				<div id="menu_menu"><a href="register.php" class="navigation">REGISTER</a></div>

		</div>	
	</div>

	<!-- ------------------------------------------------------------------------- -->

<div id="content-gal">
		<h2>GALLERY</h2>
		<div id="content-gal-left">
			<form action="upload.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="img-upload" <?= $dis ?> ><br><br>
				Name picture : <br><input type="text" name="img-name" <?= $dis ?> ><br>
				Descript : <br><input type="text" name="img-descript" <?= $dis ?> ><br>
				Username : <br><input type="text" name="img-username" value="<?= $username ?>" <?= $dis ?> ><br><br>
				<input type="submit" value="Upload" <?= $dis ?>/>
			</form>
		</div>
		<div id="content-gal-right">
			<!-- start gallery -->
			<?php
				/* set value */
				$allpicture = glob('img/upload/img*.jpg');
				$allinfopicture = file('img/upload/info/infopicture.txt');
				$numallpicture = count($allpicture)-1;
				$numallpicture2 = count($allpicture);

				// number picture on 1 page
				$perPage = 9;
				
				// find number of page
				$num_naviPage=ceil($numallpicture2/$perPage);

				// set value number page
				if(!isset($_GET['page'])){  
				    $s_key=0;  
				    $e_key=$perPage;      
				    $_GET['page']=1;  
				}else{  
				    $s_key=($_GET['page']*$perPage)-$perPage;  
				    $e_key=$perPage*$_GET['page'];  
				    $e_key=($e_key>$numallpicture2)?$numallpicture2:$e_key;  
				}
				
				// set name picture on the page
				$name_pic = $numallpicture-$s_key;

				/* start show picture */
				for($i=$s_key;$i<$e_key;$i++) {
					/* set block picture */
					//if($i>12){ $block="block";}elseif($i<=12) { $block="";}

					/* set info value */
					$infopicture = explode(" ?--? ", $allinfopicture[$name_pic]);	?>

					<!-- start show picture -->
					<div class="i img-wrap">
						<img src="<?= $infopicture[3] ?>" alt="<?= $infopicture[0] ?>" title="<?= $infopicture[0] ?> | <?= $infopicture[2] ?>"/>
						<a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?= $infopicture[3] ?>" title="<?= $infopicture[0] ?><br>Description : <?= $infopicture[2] ?>">
							<div class="img-hover-gl"></div>
						</a>
					</div>
					<?php
					$name_pic--;
				} /* end for show picture */
				echo "<div id=\"Bu\">";
				for($i=1;$i<=$num_naviPage;$i++){
					if($i==$_GET['page']){
				    	echo "<a href=\"?page=".$i."\">Page$i</a>";
				    }
				    else{
				    	echo "<a href=\"?page=".$i."\"><img src=\"img/bu2.png\" ></a>";
				    }
				}  
				echo "</div><br>";
			?>
			<!-- end gallery -->

		</div><!-- end content-gal-right -->
	<p style="opacity:0;">1</p>
</div>






<!-- script effect picture -->
<script type="text/javascript">
	$(document).ready(function() {

		$(".img-hover-gl").hide();

		$(".i").hover(function(){
			$(".img-hover-gl", this).fadeIn();
		}, function() {
			$(".img-hover-gl", this).fadeOut();
		});

		//FancyBox
		$('.fancybox-thumbs').fancybox({
			padding: 0,

			openEffect : 'elastic',
			openSpeed  : 150,

			closeEffect : 'elastic',
			closeSpeed  : 150,

			closeClick : true,

			prevEffect : 'elastic',
			nextEffect : 'elastic',

			closeBtn  : true,
			arrows    : true,
			nextClick : true,

			helpers : {
				title : {
					type : 'float'
				},
				thumbs : {
					width  : 50,
					height : 50
				}
			}
		});
	});
</script>

<?php
	include("footer.html");
?>
