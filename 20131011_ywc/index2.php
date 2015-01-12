<?php
     require_once("sdk/src/facebook.php");
    $facebook = new Facebook(array(
      'appId'  => '1422004204678941',
      'secret' => 'bbc29e03687fcc2f27df2293f2dab281',
    ));

    $loginUrl   = $facebook->getLoginUrl(
            array(
                'scope'         => 'email,offline_access,publish_stream,user_birthday,user_location,user_work_history,user_about_me,user_hometown',

            )
    );



?>
<div class="fb-comments" data-href="http://google.com" data-colorscheme="The color scheme used in the plugin" data-numposts="5" data-width="1000px"></div>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1422004204678941";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>