<?php $page="gallery"; ?>
<?php include 'header.php'; ?>
<?php 
	/* check not login */
	if(isset($_POST['username'])|| isset($_COOKIE['username'])) { $disabled=""; }
	else { $disabled="disabled"; }
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

<div class="content-wrapper">
	<div class="content-container">

		<!-- icon-page & share picture -->
		<div id="content-icon-wrapper">	
			<!-- icon-page -->		
			<a href="information.php"><div id="content-icon" class="icon-page">
				<p>i</p>
			</div></a>
			<a href="trips.php"><div id="content-icon" class="icon-page">
				<p>t</p>
			</div></a>
			<a href="product.php"><div id="content-icon" class="icon-page">
				<p>p</p>
			</div></a>
			<a href="gallery.php"><div id="content-icon" class="icon-page-active">
				<p>g</p>
			</div></a>

			<!-- Share picture -->
			<div id="gallery-share-wrapper">				
				<div id="gallery-share-head"><h1>Share</h1></div>
				<div id="gallery-share-form">
					<form action="upload.php" method="POST" enctype="multipart/form-data">
						<input type="file" name="img-upload" <?= $disabled ?> />
						<p id="share-p">Picture's name</p>
						<input type="text" name="img-name" id="share-name" class="input1" <?= $disabled ?>/>
						<p id="share-p">Description</p>
						<input type="text" name="img-descript" id="share-desc" class="input1" <?= $disabled ?>/>
						<input type="text" name="img-username" value="<?= $username ?>" class="block"/>
						<input type="submit" id="share-bt" value="Share" class="button" <?= $disabled ?> />
					</form>
				</div><!-- end gallery-share-form -->

			</div>
			<!-- end Share picture -->

		</div><!-- end content-icon-wrapper -->		

		<!-- content -->
		<div id="gallery-wrapper" class="content-article-wrapper">
			<!-- start gallery -->
			<?php
				/* set value */
				$allpicture = glob('img/upload/img*.jpg');
				$allinfopicture = file('img/upload/info/infopicture.txt');
				$numallpicture = count($allpicture)-1;
				$numallpicture2 = count($allpicture);
				$ii=1;

				// number picture on 1 page
				$perPage = 10;
				
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
				for($i=$s_key;$i<$e_key;$i++){

					/* set not margin on pic3 */
					if($i%2==0){$clear="clear-l margin-r2";} elseif($i%2==1){$clear="clear-r";}
					if($ii>10){ $blockpic="block"; } else{ $blockpic=""; }

					/* set info value */
					$infopicture = explode(" ?--? ", $allinfopicture[$name_pic]);	?>

					<!-- start show picture -->
					
					<div id="img-wrapper" class="<?= $clear ?> <?= $blockpic ?> boxgrid captionfull">
						<figure><img class="img-hover" src="<?= $infopicture[3] ?>" alt="<?= $infopicture[0] ?>" title="<?= $infopicture[0] ?> | <?= $infopicture[2] ?>"/></figure>
						<div class="cover boxcaption">
							<h3><?= $infopicture[0] ?></h3>
							<p>Shared by <b><?= $infopicture[1] ?></b></p>

							<!-- link fancybox -->
							<a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?= $infopicture[3] ?>" title="<?= $infopicture[0] ?><br>Description : <?= $infopicture[2] ?>">
								<span id="icon-caption" class="icon-link"></span>
							</a>
						</div>
					</div><!-- end show picture -->
					<?php
					$name_pic--;
					$ii++;
				} /* end for show picture */
				echo "<div id=\"gallery-bullet\">";
				for($i=1;$i<=$num_naviPage;$i++){ 

					if($i==$_GET['page']){
						echo "<a href=\"?page=".$i."\"><div class=\"bullet-active margin-l1\">+</div></a>";   
					}
					else{
						echo "<a href=\"?page=".$i."\"><div class=\"bullet margin-l1\">+</div></a>";  
					}				      
				}  
				echo "</div>"; 
			?>
			<!-- end gallery -->
		</div><!-- end content-article-wrapper -->	

		<div class="line-h">&nbsp;</div>
	</div><!-- end content-container -->
</div><!-- end content-wrpper -->

<!-- script img hover effect -->
<script type="text/javascript">
	$(document).ready(function(){
		//Full Caption Sliding (Hidden to Visible)
		$('.boxgrid.captionfull').hover(function(){
			$(".cover", this).stop().animate({top:'140px'},{queue:false,duration:160});
		}, function() {
			$(".cover", this).stop().animate({top:'200px'},{queue:false,duration:160});
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

<?php include 'footer.php'; ?>