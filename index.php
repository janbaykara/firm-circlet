<?php
    require($_SERVER["DOCUMENT_ROOT"]."/politicalrecruits/php/config.php");

    // Init page
    $view = new view("Political Recruits");
    $app->setView($view);

    // Page contents
    $content = print_r($app);

    // Render page
    $view->setContent($content);
    $app->render();
    
?>