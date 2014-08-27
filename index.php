<?php
/* ===============
*
*  Homepage 1.0.0
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
  $user = new User($app->getPDOConnection());

  foreach($user->PDO->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC) as $row) {
    echo $row['name'];
  }
?>
</div>
<!--
**************** PAGE CONTENT END ****************
-->
<?
$view->setContent(ob_get_clean());
$app->addHeader("header.php");
$app->addFooter("footer.php");
$app->setView($view);
$app->render();
?>