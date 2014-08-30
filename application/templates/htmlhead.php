<?php ob_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" itemscope itemtype="http://schema.org/<?=$this->SCHEMAROOT?>" lang="en-gb"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" itemscope itemtype="http://schema.org/<?=$this->SCHEMAROOT?>" lang="en-gb"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" itemscope itemtype="http://schema.org/<?=$this->SCHEMAROOT?>" lang="en-gb"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" itemscope itemtype="http://schema.org/<?=$this->SCHEMAROOT?>" lang="en-gb"> <!--<![endif]-->
<head>

    <!-- ******************************************************* ---
    *
    *   Powered by cynicism and hayfever. 
    *
    ---- ******************************************************* -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Mass of favicon data, courtesy of the http://faviconit.com/ generator -->
      <link rel="shortcut icon" href="<?=$this->URL['IMG']?>/favicon.ico?v=1.0">
      <link rel="icon" sizes="16x16 32x32 64x64" href="<?=$this->URL['IMG']?>/favicon.ico?v=1.0">
      <link rel="icon" type="image/png" sizes="196x196" href="<?=$this->URL['IMG']?>/favicon-196.png?v=1.0">
      <link rel="icon" type="image/png" sizes="160x160" href="<?=$this->URL['IMG']?>/favicon-160.png?v=1.0">
      <link rel="icon" type="image/png" sizes="96x96" href="<?=$this->URL['IMG']?>/favicon-96.png?v=1.0">
      <link rel="icon" type="image/png" sizes="64x64" href="<?=$this->URL['IMG']?>/favicon-64.png?v=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="<?=$this->URL['IMG']?>/favicon-32.png?v=1.0">
      <link rel="icon" type="image/png" sizes="16x16" href="<?=$this->URL['IMG']?>/favicon-16.png?v=1.0">
      <link rel="apple-touch-icon" sizes="152x152" href="<?=$this->URL['IMG']?>/favicon-152.png?v=1.0">
      <link rel="apple-touch-icon" sizes="144x144" href="<?=$this->URL['IMG']?>/favicon-144.png?v=1.0">
      <link rel="apple-touch-icon" sizes="120x120" href="<?=$this->URL['IMG']?>/favicon-120.png?v=1.0">
      <link rel="apple-touch-icon" sizes="114x114" href="<?=$this->URL['IMG']?>/favicon-114.png?v=1.0">
      <link rel="apple-touch-icon" sizes="76x76" href="<?=$this->URL['IMG']?>/favicon-76.png?v=1.0">
      <link rel="apple-touch-icon" sizes="72x72" href="<?=$this->URL['IMG']?>/favicon-72.png?v=1.0">
      <link rel="apple-touch-icon" href="<?=$this->URL['IMG']?>/favicon-57.png?v=1.0">
      <meta name="msapplication-TileColor" content="#FFFFFF">
      <meta name="msapplication-TileImage" content="<?=$this->URL['IMG']?>/favicon-144.png?v=1.0">
      <meta name="msapplication-config" content="<?=$this->URL['IMG']?>/browserconfig.xml">

    <!-- Metadata -->
        <title><?=$this->PAGETITLE?></title>
        <meta content="<?=$this->PROJECTNAME?>" />
        <meta itemprop="description" content="<?=$this->DESCRIPTION?>" name="description"/>
        <meta itemprop="image" content="<?=$this->LOGO?>" />
        <meta name="keywords" content="<?=$this->KEYWORDS?>">
        <!-- \\ TWITTER -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="<?=$this->URL['BASE']?>">
        <meta name="twitter:title" content="<?=$this->PAGETITLE?>">
        <meta name="twitter:description" content="<?=$this->DESCRIPTION?>">
        <meta name="twitter:image:src" content="<?=$this->LOGO?>">
        <!-- \\ FACEBOOK -->
        <meta property="og:title" content="<?=$this->PAGETITLE?>" />
        <meta property="og:url" content="<?=$this->URL['BASE']?>"/>
        <meta property="og:site_name" content="<?=$this->PAGETITLE?>" />
        <meta property="og:description" content="<?=$this->DESCRIPTION?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?=$this->LOGO?>" />
      
        <? if($this->LESS == true) { /* **************************************** */ ?>

        <!-- Stylesheets -->
            <link href='<?=$this->URL['CSS']?>/master.less' rel='stylesheet/less' type='text/css'> 

        <!-- Dependencies -->
            <script>less = { env: 'development' };</script>
            <script src='//cdn.jsdelivr.net/less/1.7.1/less.min.js'></script>
  
        <? } else { /* ********************************************************* */  ?>
  
        <!-- Stylesheets -->
            <link  href='<?=$this->URL['CSS']?>/master.css' rel='stylesheet' type='text/css'>

        <!-- Dependencies -->
  
        <? }  /* ***************************************************************** */  ?>  
  
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<? echo ob_get_clean(); ?>