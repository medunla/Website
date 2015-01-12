<?php
  session_start();

  require_once("sdk/src/facebook.php");
  // Public
  $facebook = new Facebook(array(
    'appId'  => '462614573838620',
    'secret' => '0e7ade957e439c07397353bbf6ca0101',
  ));
  // Localhost
  $facebooks = new Facebook(array(
    'appId'  => '1441089346108360',
    'secret' => '2c00b5ac7693486357508a7883574dcc',
  ));

  // Login with facebook(user)
  $user = $facebook->getUser();

  if($user) {
    try {
      $user_profile = $facebook->api('/me');
      $_SESSION["user_profile"] = $user_profile;
      session_write_close();
    }
    catch (FacebookApiException $e) {
      error_log($e);
      $user = null;
    }
  }
  if($user) {
    $logoutUrl = $facebook->getLogoutUrl();
  } else {
    $loginUrl = $facebook->getLoginUrl(array('scope'=>'publish_stream, user_birthday, email'));
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Horozart :: โชคชะตาอยู่ในกำมือคุณแล้ว</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="lib/css/style.css">
  <link rel="stylesheet" type="text/css" href="lib/fonts.css">
</head>
<body>
  <?php
  if(!$user){ ?>

    <!-- Login page -->
    <div class="BG BG-loginPage"></div>
    <div id="loginPage" class="container">
      <div id="logo"><img src="img/loginPage/logo.png"></div>      
      <p>ดวงชะตาไม่ใช่การลิขิตชีวิตให้เป็นไปตามดวง 100%</p>
      <p>ดวงชะตาเป็นเพียงเครื่องชี้บอก หรือแนะแนวทางชีวิตว่าอาจจะเป็นไปรูปแบบใด</p>
      <p>ถ้าคุณมีความสามารถแก้ไขนิสัยไม่ดีได้ ย่อมน้ำวิถีชีวิต ผ่านความยุ่งยากไปได้.</p>
      <a href="<?= $loginUrl ?>">
        <div id="btn-login" class="wrap2"> 
          <div class="common button tran-0-5s">START NOW</div>
          <div class="common button2 tran-0-5s">Login with facebook</div>
        </div>
      </a>
    </div>

  <?php
  } else { ?>

    <!-- Menu page -->
    <div class="BG BG-menuPage"></div>
    <div id="menuPage" class="container styleAllPage">
      <h1>comepe zart</h1>     
      <p>พบกับศาสตร์การพยากรณ์ต่างๆมากมาย ทั้งแบบอียิปต์ อินเดีย ทำนายทายทัก</p>
      <p>ทายนิสัยจากเวลาเกิด และความเป็นมาต้นเหตุของความเชื่อโบราณ ได้ที่นี้</p>

      <div class="menuWrapper">
        <!-- menu 1 -->        
        <div class="menu">
          <a href="payakorn.php">
          <div class="picture-wrapper">
            <div class="border-white"></div>
            <div class="border-hover border-hover-blue tran-0-5s"></div>
            <img src="img/menuPage/payakorn.png">
          </div>
          </a>
          <!-- End picture-wrapper -->

          <p class="caption-menu">
            ดูดวง ตามวัน ตามราศี</br>
            แบบอินเดีย แบบจีน
          </p>
        </div>

        <!-- menu 2 -->
        <div class="menu">
          <a href="taytuk.php">
          <div class="picture-wrapper">
            <div class="border-white"></div>
            <div class="border-hover border-hover-blue tran-0-5s"></div>
            <img src="img/menuPage/tay.png">
          </div>
          </a>
          <!-- End picture-wrapper -->

          <p class="caption-menu">
            ทายนิสัย ตามเวลาเกิด จากชื่อ</br>
            จากอีเมลล์ จากความกลัว
          </p>
        </div>

        <!-- menu 3 -->
        <div class="menu">
          <a href="mahavate.html">
          <div class="picture-wrapper">
            <div class="border-white"></div>
            <div class="border-hover border-hover-blue tran-0-5s"></div>
            <img src="img/menuPage/mahavate.png">
          </div>
          </a>
          <!-- End picture-wrapper -->

          <p class="caption-menu">
            ความรู้ เรื่องลี้ลับ ตำนาน</br>
            ที่มาของความเชื่อ
          </p>
        </div>

      </div>
      <!-- End menuWrapper -->
    </div>
  <?php
  } ?>
</body>
</html>