<?php
require($_SERVER["DOCUMENT_ROOT"]."/politicalrecruits/application/config.php");
/* ===============
*
*  Homepage 1.0.0
*
* ============= */
$view = new view("Political Recruits",$PUBLIC);
ob_start(); ?><!--
******************************************************************************************************************
*************** PAGE CONTENT START *******************************************************************************
-->
<div class="wrapper">
<?
  $user = new User($app->getPDOConnection());

  foreach($user->PDO->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC) as $row) {
    echo $row['name'];
  }
?>
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