<?php
require($_SERVER["DOCUMENT_ROOT"]."/politicalrecruits/application/config.php");
/* ===============
*
*  Homepage 1.0.0
*
* ============= */
$view = new view($PUBLIC,"Political Recruits");
ob_start(); ?><!--
******************************************************************************************************************
*************** PAGE CONTENT START *******************************************************************************
-->
<div class="wrapper">
<?
  /*
  $user = new User($DATABASE);
  
  $user->register([
    "username"    => "JanBay",
    "type"        => "1",
    "email"       => "janbaykara@gmail.com",
    "password"    => "macos100"
  ]);
  */
?>
  <form method="POST" action="<?=$view->controller('login')?>">
    <input type="email" name="email" placeholder="email@address.com" />
    <input type="password" name="password" />
    <input type="submit" value="login" />
  </form>
  
</div>
<!--
**************** PAGE CONTENT END ********************************************************************************
******************************************************************************************************************
--><?// Build view
$view->addHeader($app->TEMPLATES, "htmlhead");
$view->addHeader($app->TEMPLATES, "bodyheader");
$view->setContent(ob_get_clean());
$view->addFooter($app->TEMPLATES, "bodyfooter");
// Deploy view
$app->setView($view);
$app->view->render();
?>