<?php
  include "function/class.php";
  require_once("sdk/src/facebook.php");
  // Public
  $facebooks = new Facebook(array(
    'appId'  => '462614573838620',
    'secret' => '0e7ade957e439c07397353bbf6ca0101',
  ));
  // Localhost
  $facebook = new Facebook(array(
    'appId'  => '1441089346108360',
    'secret' => '2c00b5ac7693486357508a7883574dcc',
  ));

  // Login with facebook(user)
  $user = $facebook->getUser();

  if($user) {
    try {
      $user_profile = $facebook->api('/me');      
    }
    catch (FacebookApiException $e) {
      error_log($e);
      $user = null;
    }
  }
  if($user) {
    $logoutUrl = $facebook->getLogoutUrl();

    // Setting default value.    
    $id = $user_profile['id'];
    $picture = "https://graph.facebook.com/" . $id . "/picture";
    $name = $user_profile['name'];
    $gender = $user_profile['gender'];
    $birth = explode("/", $user_profile['birthday']);
    $birth_d = intval($birth[0]);
    $birth_m = intval($birth[1]);
    $birth_y = intval($birth[2]);
    $email = $user_profile['email'];
  } else {
    $loginUrl = $facebook->getLoginUrl(array('scope'=>'publish_stream, user_birthday, email'));
  }

  // Get value
  if($user) {
    $Horazart = new Horazart();

    // Calculate birth day in Monday - Sunday
    $DateWeek = $Horazart->CalDateWeek($birth_d, $birth_m, $birth_y);
    // Calculate Zodiac
    $Zodiac = $Horazart->CalZodiac($birth_d, $birth_m);
    // Calculate Naksat
    $Naksat = $Horazart->CalNaksat($birth_y);
    // Calculate India style
    $India = $Horazart->CalIndia($birth_d, $birth_m);
    // Calculate Egypt style
    $Egypt = $Horazart->CalEgypt($birth_d, $birth_m);
    // Calculate FirstEmail
    $FirstEmail = $Horazart->CalEmail($email);

  }


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>
  <?php
  if($user){ ?>
    <img src="<?= $picture ?>" alt="">
    <p>id : <?= $id ?></p>
    <p>name : <?= $name ?></p>
    <p>gender : <?= $gender ?></p>
    <p>day : <?= $birth_d ?></p>
    <p>month : <?= $birth_m ?></p>
    <p>year : <?= $birth_y ?></p>
    <p>email : <?= $email ?></p>
    <p>date in week : <?= $DateWeek ?></p>
    <p>zodiac : <?= $Zodiac ?></p>
    <p>nak-sat : <?= $Naksat ?></p>
    <p>india style : <?= $India ?></p>
    <p>egypt style : <?= $Egypt ?></p>
    <p>first email : <?= $FirstEmail ?></p>

    
    <form action="index2.php" method="post">
      time birth :<input type="text" name="time"><br>
      name : <input type="text" name="name"><br>
      phone : <input type="text" name="phone"><br>
      <input type="submit">


    </form>

    <?= $Horazart->ReadData("DateWeek", $DateWeek); ?>

  <?php
  } else { ?>
    <a href="<?= $loginUrl ?>">Login</a>
  <?php
  } ?>
</body>
</html>