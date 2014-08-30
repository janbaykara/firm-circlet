<?php
require($_SERVER["DOCUMENT_ROOT"]."/application/config.php");
/* ===============
*
*  Homepage 1.0.0
*
* ============= */
$view = new view($app->PUBLIC,"Political Recruits");
ob_start(); ?><!--
******************************************************************************************************************
*************** PAGE CONTENT START *******************************************************************************
-->
<div class="wrapper">
<?
  $user = new User($app->DB);
  
  $user->register([
    "username"    => "JanBay",
    "type"        => "1",
    "email"       => "janbaykara@gmail.com",
    "password"    => "macos100"
  ]);
?>
  
</div>
<!--
**************** PAGE CONTENT END ********************************************************************************
******************************************************************************************************************
--><?// Build view
$view->addHeader($app->DIR['TEMPLATE'], "htmlhead");
$view->addHeader($app->DIR['TEMPLATE'], "bodyheader");
$view->setContent(ob_get_clean());
$view->addFooter($app->DIR['TEMPLATE'], "bodyfooter");
// Deploy view
$app->setView($view);
$app->view->render();
?>