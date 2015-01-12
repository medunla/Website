<?php
	include "lib/function/GetInformation.php";
	$GetInformation = new GetInformation();
	$fileNames = $GetInformation->GetFileName();
	$amountFile = count($fileNames);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Document</title>
		<!-- META TAG -->
		<meta charset="utf-8">
		<meta name="description" content="Panupat document">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS Link -->
		<link rel="stylesheet" href="lib/css/style.css">
		<link rel="stylesheet" href="lib/css/bootstrap.min.css">
		<link rel="stylesheet" href="lib/css/bootstrap-theme.min.css">

		<!-- JS -->
		<script type="text/javascript" src="lib/js/eCSStender.js"></script>

	</head>
	<body>
        <div class="container">
        	<!-- Header -->
        	<header class="page-header row">
        		<h1 class="col-sm-8">
        			<span id="icon-document" class="glyphicon glyphicon-folder-open"></span>
        			Document
        			<span class="badge"><?= $amountFile ?></span>
        		</h1>
        	
				<div id="search-bar" class="input-group col-sm-4">
					<input type="text" class="form-control" placeholder="Search">
					<span class="input-group-btn">
						<button class="btn btn-primary tran-0-3s" type="button">
							<span class="glyphicon glyphicon-search">
						</button>
					</span>
				</div>
			</header>
			<!-- End Header --><!-- End Header --><!-- End Header --><!-- End Header -->

			<?php 
			foreach ($fileNames as $fileName) {
				$data = $GetInformation->GetData($fileName); ?>

				<!-- Section -->
				<section class="container no-padding row">
					<!-- header -->
					<div id="section-header" class="col-sm-10 no-padding">
		        		<h1><?= $data[0] ?><span class="small"><?= $data[1] ?></span></h1>
		        		<div id="hashtag">
		        			<span class="glyphicon glyphicon-tags">
		        			<?php
		        			$hashtags = explode("%next%", $data[2]);
							foreach ($hashtags as $hashtag) { ?>

		        			<a href="#" alt=""><span class="label label-default"><?= $hashtag ?></span></a>

		        			<?php
		        			}
		        			?>
		        		</div>
	        		</div>

	        		<!-- download -->
	        		<?php

	        		if( preg_match("/.rar$/", $data[3]) ){ ?>
	        		<a href="<?= $data[3] ?>" alt="download" target="blank">
		        		<div id="download" class="col-sm-2 no-padding">
		        			<button class="btn btn-success tran-0-3s" type="button">
		        				Download<span class="glyphicon glyphicon-save"></span>
							</button>
						</div>
					</a>
	        		<?php
	        		}
	        		?>
	        		

	        		<!-- code -->
					<div id="code" class="col-sm-12 no-padding">

	        			<?php
		        		$types = explode("%next%", $data[4]);
	        			$codes = explode("%next%", $data[5]);
						for($i=0; $i < count($types); $i++) { ?>

	        			<!-- code#HTML -->
	        			<span id="type-file" class="label label-success"><?= $types[$i] ?></span>
		        		<blockquote class="blockquote-style">
		        			<?= $codes[$i] ?>
		        		</blockquote>
		        		
		        		<?php
		        		}
		        		?>

	        		</div>

				</section>
				<!-- End Section -->
			<?php	
			}
			?>
			
        	

        </div>
        <!-- end container -->
	</body>
</html>