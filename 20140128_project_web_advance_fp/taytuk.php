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
  <title>Horozart :: ทายนิสัย</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="lib/css/style.css">
  <link rel="stylesheet" type="text/css" href="lib/fonts.css">
</head>
<body>

  <div class="BG BG-taytukPage"></div>
  <a href="index.php"><img class="btn-back tran-0-3s btn-effect-scaleUp" src="img/button_back.png"></a>
  <div id="taytukPage" class="container styleAllPage">
    <h1>Tumnay taytuk</h1>     
    <p>ทายนิสัยจาก เวลาเกิด จากชื่อภาษาอังกฤษ จากอีเมลล์</p>
    <p>จากความกลัว จากเบอร์โทรศัพท์</p>

    <div class="menuWrapper">
      <!-- menu 1 -->        
      <div class="menu">
        <a href="<?= $LinkDateWeek ?>">
        <div class="picture-wrapper">
          <div class="border-white"></div>
          <div class="border-hover border-hover-name tran-0-5s"></div>
          <img src="img/taytukPage/name_taytuk.png">
        </div>
        </a>
        <!-- End picture-wrapper -->
      </div>

      <!-- menu 2 -->
      <div class="menu">
        <a href="<?= $LinkNaksat ?>">
        <div class="picture-wrapper">
          <div class="border-white"></div>
          <div class="border-hover border-hover-email tran-0-5s"></div>
          <img src="img/taytukPage/email_taytuk.png">
        </div>
        </a>
        <!-- End picture-wrapper -->
      </div>

      <!-- menu 3 -->
      <div class="menu">
        <a href="<?= $LinkZodiac ?>">
        <div class="picture-wrapper">
          <div class="border-white"></div>
          <div class="border-hover border-hover-tel tran-0-5s"></div>
          <img src="img/taytukPage/tel_taytuk.png">
        </div>
        </a>
        <!-- End picture-wrapper -->
      </div>

      <!-- menu 4 -->
      <div class="menu menu-spacail menu-marginLeft">
        <a href="<?= $LinkIndia ?>">
        <div class="picture-wrapper">
          <div class="border-white"></div>
          <div class="border-hover border-hover-time tran-0-5s"></div>
          <img src="img/taytukPage/time_taytuk.png">
        </div>
        </a>
        <!-- End picture-wrapper -->
      </div>

      <!-- menu 5 -->
      <div class="menu menu-spacail">
        <a href="<?= $LinkEgypt ?>">
        <div class="picture-wrapper">
          <div class="border-white"></div>
          <div class="border-hover border-hover-ghost tran-0-5s"></div>
          <img src="img/taytukPage/ghost_taytuk.png">
        </div>
        </a>
        <!-- End picture-wrapper -->
      </div>

    </div>
    <!-- End menuWrapper -->
  </div>

</body>
</html>