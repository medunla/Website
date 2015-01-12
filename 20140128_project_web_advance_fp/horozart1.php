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
    $LinkDateWeek = "results.php/?id=" . $id . "&n=" . $name ."&t=DateWeek&d=" . $DateWeek;
  // Calculate Zodiac
  $Zodiac = $Horazart->CalZodiac($birth[0], $birth[1]);
    $LinkZodiac = "results.php/?id=" . $id . "&n=" . $name ."&t=Zodiac&d=" . $Zodiac;
  // Calculate Naksat
  $Naksat = $Horazart->CalNaksat($birth[2]);
    $LinkNaksat = "results.php/?id=" . $id . "&n=" . $name ."&t=Naksat&d=" . $Naksat;
  // Calculate India style
  $India = $Horazart->CalIndia($birth[0], $birth[1]);
    $LinkIndia = "results.php/?id=" . $id . "&n=" . $name ."&t=India&d=" . $India;
  // Calculate Egypt style
  $Egypt = $Horazart->CalEgypt($birth[0], $birth[1]);
    $LinkEgypt = "results.php/?id=" . $id . "&n=" . $name ."&t=Egypt&d=" . $Egypt;

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>

    <a href="<?= $LinkDateWeek ?>">
      <p>DateWeek</p>
    </a>
    <a href="<?= $LinkZodiac ?>">
      <p>Zodiac</p>
    </a>
    <a href="<?= $LinkNaksat ?>">
      <p>Naksat</p>
    </a>
    <a href="<?= $LinkIndia ?>">
      <p>India</p>
    </a>
    <a href="<?= $LinkEgypt ?>">
      <p>Egypt</p>
    </a>

</body>
</html>