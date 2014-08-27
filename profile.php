<?php
/* ===============
*
*  Jobseeker Profile Page 1.0.0
*
* ============= */
require($_SERVER["DOCUMENT_ROOT"]."/politicalrecruits/php/config.php");
$view = new view("Political Recruits");
ob_start(); 
?>
<!--
*************** PAGE CONTENT START ***************
-->
<div class="wrapper">
<?
  $i = 1;
  while($i < 60) {
    echo "Peter piper ... $i <br>";
    $i++;
  }
?>
</div>
<!--
**************** PAGE CONTENT END ****************
-->
<?
$view->setContent(ob_get_clean());
$app->setView($view);
$app->render();
?>