<?php
	// Data Get
	$id = $_GET['id'];
	$name = $_GET['n'];
	$TypeData = $_GET['t'];
	$Data = $_GET['d'];
	$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	include "function/class.php";
	$Horazart = new Horazart();
	$GetFb = new GetFb();	
	$picture = $GetFb->GetPicture($id);

	// Choose background from type data.
	if($TypeData == "DateWeek"){
		$classBG = "BG-resultsPage-DateWeek";
		$imgShare = "http://su13540215.2th.asia/work/20140128_project_web_advance_fp/img/payakorn.png";
	}
	elseif($TypeData == "Zodiac"){
		$classBG = "BG-resultsPage-Zodiac";
		$imgShare = "http://su13540215.2th.asia/work/20140128_project_web_advance_fp/img/payakorn.png";
	}
	elseif($TypeData == "Naksat"){
		$classBG = "BG-resultsPage-Naksat";
		$imgShare = "http://su13540215.2th.asia/work/20140128_project_web_advance_fp/img/payakorn.png";
	}
	elseif($TypeData == "India"){
		$classBG = "BG-resultsPage-India";
		$imgShare = "http://su13540215.2th.asia/work/20140128_project_web_advance_fp/img/payakorn.png";
	}
	elseif($TypeData == "Egypt"){
		$classBG = "BG-resultsPage-Egypt";
		$imgShare = "http://su13540215.2th.asia/work/20140128_project_web_advance_fp/img/payakorn.png";
	}
	elseif($TypeData == "TimeBirth"){
		$classBG = "BG-resultsPage-TimeBirth";
		$imgShare = "http://su13540215.2th.asia/work/20140128_project_web_advance_fp/img/tay.png";
	}
	elseif($TypeData == "Name"){
		$classBG = "BG-resultsPage-Name";
		$imgShare = "http://su13540215.2th.asia/work/20140128_project_web_advance_fp/img/tay.png";
	}
	elseif($TypeData == "Phone"){
		$classBG = "BG-resultsPage-Phone";
		$imgShare = "http://su13540215.2th.asia/work/20140128_project_web_advance_fp/img/tay.png";
	}
	elseif($TypeData == "Email"){
		$classBG = "BG-resultsPage-Email";
		$imgShare = "http://su13540215.2th.asia/work/20140128_project_web_advance_fp/img/tay.png";
	}
	elseif($TypeData == "Fear"){
		$classBG = "BG-resultsPage-Fear";
		$imgShare = "http://su13540215.2th.asia/work/20140128_project_web_advance_fp/img/tay.png";
	}

	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Horozart :: <?= $Horazart->HeadData($TypeData, $Data); ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
  	<link rel="stylesheet" type="text/css" href="lib/fonts.css">
</head>
<body>

	<div class="BG <?= $classBG ?>"></div>
	<div id="resultsPage" class="container">
		<div id="picture-results" ><img src="<?= $picture ?>" alt="<?= $name ?>"></div>
		<div id="name-results"><p><?= $name ?></p></div>

		<div id="content-box">
			<p id="head-content"><?= $Horazart->HeadData($TypeData, $Data); ?></p>
			<div id="content-results"><?= $Horazart->ReadData($TypeData, $Data); ?></div>			
		</div>
		<div id="results-btn">
			<a href="index.php"><img id="btn-back-results" class="btn-effect-scaleUp tran-0-3s" src="img/resultsPage/back.png"></a>
			<img id="btn-share" class="btn-effect-scaleUp tran-0-3s" src="img/resultsPage/share.png" onclick="Share()">
		</div>
			
	</div>	


	<!-- Script -->
	<p id="nameShare" class="hide">Horozart :: <?= $Horazart->HeadData($TypeData, $Data); ?></p>
	<p id="picShare" class="hide"><?= $imgShare ?></p>
	
	<div id="fb-root"></div>
	<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '462614573838620',
          status     : true,
          xfbml      : true
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/all.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>
    function Share(){
		FB.ui(
	      {
	       method: 'feed',
	       name: document.getElementById("nameShare").innerHTML,
	       caption: 'คุณสนใจเปลี่ยนโชคชะตาของคุณหรือไม่',
	       description: (
	          document.getElementById("content-results").innerHTML
	       ),
	       link: "http://su13540215.2th.asia/work/20140128_project_web_advance_fp",
	       picture: document.getElementById("picShare").innerHTML
	      }
	    );
	}
	</script>
</body>
</html>