<?php
require($_SERVER["DOCUMENT_ROOT"]."/politicalrecruits/application/config.php");
/* ===============
*
*  Error page 1.0.0
*
* ============= */
$view = new view($PUBLIC,"Error $_SERVER[REDIRECT_STATUS] - Political Recruits");
ob_start(); ?><!--
******************************************************************************************************************
*************** PAGE CONTENT START *******************************************************************************
-->
<div class="wrapper" id="errmsg">
    <!-- Error code -->
    <h1 id="errno"><? echo "Error ".$_SERVER['REDIRECT_STATUS'] ?></h1>
    <!-- Error description -->
    <?
        switch($_SERVER['REDIRECT_STATUS']) {
            case 400:
                // BAD REQUEST - Syntax
                $msg_one= "<span class='error-msg'>Bad.</span>";
                $msg_two= "... the request, that is.";
                $runaway = "Take me back to the paradise city...";
                break;
            case 401:
                // UNAUTHORIZED
                $msg_one= "<span class='error-msg'>Denied.</span>";
                $msg_two= "That's right. What of it? Fisticuffs? Fisticuffs.";
                $runaway = "See you at dawn...";
                break;
            case 403:
                // FORBIDDEN
                $msg_one= "<span class='error-msg'>Halt!</span>";
                $msg_two= "From here, you will witness the final destruction of the Alliance and the end of your insignificant rebellion!";
                $runaway = "Beam me up, Scotty!";
                break;
            case 404:
                // NOT FOUND
                $msg_one= "<span class='error-msg'>Huh.</span>";
                $msg_two= "This isn't the page you're looking for.";
                $runaway = "Maybe there's life in this galaxy?";
                break;
            case 500:
                // INTERNAL SERVER ERROR
                $msg_one= "<span class='error-msg'>Oof.</span>";
                $msg_two= "There's a rip in the space-time contiuum.";
                $runaway = "Sleep now, in the fire...";
                break;
            default:
                $msg_one= "<span class='error-msg'>Oof.</span>";
                $msg_two= "There's a rip in the space-time contiuum.";
                $runaway = "Beam me up, scotty!";
                break;
        }
    ?>
    <div id="errtext">
        <div id="errmsg_one">
            <?=$msg_one?>
        </div>
        <div id="errmsg_two">
            <?=$msg_two?>
        </div>
    </div>
    <? echo "<a id='errreturn' href='{$view->BASEURL}'>&larr;{$runaway}</a>"; ?>
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