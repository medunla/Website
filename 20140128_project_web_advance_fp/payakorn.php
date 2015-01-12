<?php
  session_start();
  $user_profile = $_SESSION["user_profile"];

  include "function/class.php";  
  $ConvertTimeBirth = new ConvertTimeBirth();
  $Horazart = new Horazart();

  // --------------------------------------------------
  // Setting default value
  // --------------------------------------------------
  $id = $user_profile['id'];
  //$picture = "https://graph.facebook.com/" . $id . "/picture";
  $name = $user_profile['name'];
  $birth = $ConvertTimeBirth->Convert($user_profile['birthday']);
  //$email = $user_profile['email'];

  // --------------------------------------------------
  // Calculate in function for create link.
  // --------------------------------------------------  
  // Calculate birth day in Monday - Sunday
  $DateWeek = $Horazart->CalDateWeek($birth[0], $birth[1], $birth[2]);
    $LinkDateWeek = "results.php?id=" . $id . "&n=" . $name ."&t=DateWeek&d=" . $DateWeek;
  // Calculate Zodiac
  $Zodiac = $Horazart->CalZodiac($birth[0], $birth[1]);
    $LinkZodiac = "results.php?id=" . $id . "&n=" . $name ."&t=Zodiac&d=" . $Zodiac;
  // Calculate Naksat
  $Naksat = $Horazart->CalNaksat($birth[2]);
    $LinkNaksat = "results.php?id=" . $id . "&n=" . $name ."&t=Naksat&d=" . $Naksat;
  // Calculate India style
  $India = $Horazart->CalIndia($birth[0], $birth[1]);
    $LinkIndia = "results.php?id=" . $id . "&n=" . $name ."&t=India&d=" . $India;
  // Calculate Egypt style
  $Egypt = $Horazart->CalEgypt($birth[0], $birth[1]);
    $LinkEgypt = "results.php?id=" . $id . "&n=" . $name ."&t=Egypt&d=" . $Egypt;

?>

<!DOCTYPE html>
<html>
<head>
  <title>Horozart :: พยากรณ์</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="lib/css/style.css">
  <link rel="stylesheet" type="text/css" href="lib/fonts.css">
</head>
<body>

  <div class="BG BG-payakornPage"></div>
  <a href="index.php"><img class="btn-back tran-0-3s btn-effect-scaleUp" src="img/button_back.png"></a>
  <div id="payakornPage" class="container styleAllPage">
    <h1>PAYAKORN</h1>     
    <p>พยากรณ์ ทำนายอนาคต ตามหลักโหราศาสตร์ไทย ตามวันเกิด ตามราศี</p>
    <p>ตามหลักอียิปต์โบราณ ตามแบบอินเดีย</p>

    <div class="menuWrapper">
      <!-- menu 1 -->        
      <div class="menu">
        <a href="<?= $LinkDateWeek ?>">
        <div class="picture-wrapper">
          <div class="border-white"></div>
          <div class="border-hover border-hover-day tran-0-5s"></div>
          <img src="img/payakornPage/Day_pic.png">
        </div>
        </a>
        <!-- End picture-wrapper -->
      </div>

      <!-- menu 2 -->
      <div class="menu">
        <a href="<?= $LinkNaksat ?>">
        <div class="picture-wrapper">
          <div class="border-white"></div>
          <div class="border-hover border-hover-chiness tran-0-5s"></div>
          <img src="img/payakornPage/Chiness_pic.png">
        </div>
        </a>
        <!-- End picture-wrapper -->
      </div>

      <!-- menu 3 -->
      <div class="menu">
        <a href="<?= $LinkZodiac ?>">
        <div class="picture-wrapper">
          <div class="border-white"></div>
          <div class="border-hover border-hover-star tran-0-5s"></div>
          <img src="img/payakornPage/Star_pic.png">
        </div>
        </a>
        <!-- End picture-wrapper -->
      </div>

      <!-- menu 4 -->
      <div class="menu menu-spacail menu-marginLeft">
        <a href="<?= $LinkIndia ?>">
        <div class="picture-wrapper">
          <div class="border-white"></div>
          <div class="border-hover border-hover-India tran-0-5s"></div>
          <img src="img/payakornPage/India_pic.png">
        </div>
        </a>
        <!-- End picture-wrapper -->
      </div>

      <!-- menu 5 -->
      <div class="menu menu-spacail">
        <a href="<?= $LinkEgypt ?>">
        <div class="picture-wrapper">
          <div class="border-white"></div>
          <div class="border-hover border-hover-Egypt tran-0-5s"></div>
          <img src="img/payakornPage/Egypt_pic.png">
        </div>
        </a>
        <!-- End picture-wrapper -->
      </div>

    </div>
    <!-- End menuWrapper -->
  </div>

</body>
</html>