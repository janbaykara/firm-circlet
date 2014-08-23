<?
# ======================
# Global dependencies
# ======================

$LESS = true;

require($_SERVER["DOCUMENT_ROOT"]."/politicalrecruits/php/functions.php");
require($_SERVER["DOCUMENT_ROOT"]."/politicalrecruits/php/classes/mysql.php");
require($_SERVER["DOCUMENT_ROOT"]."/politicalrecruits/php/classes/user.php");

session_start();

# ======================
# Global defines
# ======================

// Database
$DB = new MySQL(array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => 'macos100',
    'db' => 'qpq'
));
$TBL_USERS     = "users";

// Strings
$PUBLISHER      = "Political Recruits Ltd.";
$PROJECTNAME    = "Political Recruits";
$PAGETITLE      = $PROJECTNAME;
$DESCRIPTION    = "...";
$KEYWORDS       = "...";

// Generated strings
$COPYRIGHT      = $PUBLISHER." &copy; ".date("Y");
$HR             = date('H');
if($HR < 3 || $HR > 17) { $TIMEOFDAY = "Evening"; } 
     else if ($HR < 12) { $TIMEOFDAY = "Morning"; } 
                   else { $TIMEOFDAY = "Afternoon"; };

// URLs
$BASEDIR        = $_SERVER['SERVER_NAME'];
$BASEURL        = $BASEDIR."/politicalrecruits";
$ASSETURL       = $BASEURL;
$CSSURL         = $ASSETURL."/css";
$JSURL          = $ASSETURL."/js";
$IMGURL         = $ASSETURL."/img";
$LOGO           = $IMGURL."/logo.png";
$LOGOSOCIAL     = $LOGO;
$LOGOLINK       = $BASEURL;

$LOGIN          = $BASEURL."/login.php";
$LOGOUT         = $BASEURL."/logout.php";

// Miscellaneous
$SCHEMAROOT          = "Website";
$GOOGLEANALYTICSCODE = "UA-47411407-1";
$GOOGLEANALYTICSURL  = "baykara.co.uk";

// Security
$PRIVATEKEY = "deathtothewestonlykiddingthat'dbehilarious";

# ======================
# Global SCAFFOLD HTML
# ======================

if($LESS == true) {
  $CSS = <<<HTML
    <!-- Stylesheets -->
        <link href="$CSSURL/master.less" rel="stylesheet/less" type="text/css"> 

    <!-- Dependencies -->
        <script>less = { env: 'development' };</script>
        <script src="//cdn.jsdelivr.net/less/1.7.1/less.min.js"></script>
    HTML;
  } else {
  $CSS = <<<HTML
    <!-- Stylesheets -->
        <link  href="$CSSURL/master.css" rel="stylesheet" type="text/css">
        
    <!-- Dependencies -->
    HTML;
  }
}

$SCAFFOLD_HEAD = <<<HTML
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" itemscope itemtype="http://schema.org/$SCHEMAROOT" lang="en-gb"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" itemscope itemtype="http://schema.org/$SCHEMAROOT" lang="en-gb"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" itemscope itemtype="http://schema.org/$SCHEMAROOT" lang="en-gb"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" itemscope itemtype="http://schema.org/$SCHEMAROOT" lang="en-gb"> <!--<![endif]-->
<head>

    <!-- ####################################################### ---
    #
    #   Powered by cynicism and hayfever. 
    #
    ---- ####################################################### -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Mass of favicon data, courtesy of the http://faviconit.com/ generator -->
      <link rel="shortcut icon" href="$IMGURL/favicon.ico?v=1.0">
      <link rel="icon" sizes="16x16 32x32 64x64" href="$IMGURL/favicon.ico?v=1.0">
      <link rel="icon" type="image/png" sizes="196x196" href="$IMGURL/favicon-196.png?v=1.0">
      <link rel="icon" type="image/png" sizes="160x160" href="$IMGURL/favicon-160.png?v=1.0">
      <link rel="icon" type="image/png" sizes="96x96" href="$IMGURL/favicon-96.png?v=1.0">
      <link rel="icon" type="image/png" sizes="64x64" href="$IMGURL/favicon-64.png?v=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="$IMGURL/favicon-32.png?v=1.0">
      <link rel="icon" type="image/png" sizes="16x16" href="$IMGURL/favicon-16.png?v=1.0">
      <link rel="apple-touch-icon" sizes="152x152" href="$IMGURL/favicon-152.png?v=1.0">
      <link rel="apple-touch-icon" sizes="144x144" href="$IMGURL/favicon-144.png?v=1.0">
      <link rel="apple-touch-icon" sizes="120x120" href="$IMGURL/favicon-120.png?v=1.0">
      <link rel="apple-touch-icon" sizes="114x114" href="$IMGURL/favicon-114.png?v=1.0">
      <link rel="apple-touch-icon" sizes="76x76" href="$IMGURL/favicon-76.png?v=1.0">
      <link rel="apple-touch-icon" sizes="72x72" href="$IMGURL/favicon-72.png?v=1.0">
      <link rel="apple-touch-icon" href="$IMGURL/favicon-57.png?v=1.0">
      <meta name="msapplication-TileColor" content="#FFFFFF">
      <meta name="msapplication-TileImage" content="$IMGURL/favicon-144.png?v=1.0">
      <meta name="msapplication-config" content="$IMGURL/browserconfig.xml">

    <!-- Metadata -->
        <title>$PAGETITLE</title>
        <meta content="$PROJECTNAME" />
        <meta itemprop="description" content="$DESCRIPTION" name="description"/>
        <meta itemprop="image" content="$LOGOSOCIAL" />
        <meta name="keywords" content="$KEYWORDS">
        <!-- \\ TWITTER -->
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:site" content="$BASEURL">
            <meta name="twitter:title" content="$PAGETITLE">
            <meta name="twitter:description" content="$DESCRIPTION">
            <meta name="twitter:image:src" content="$LOGOSOCIAL">
        <!-- \\ FACEBOOK -->
            <meta property="og:title" content="$PAGETITLE" />
            <meta property="og:url" content="$BASEURL"/>
            <meta property="og:site_name" content="$PAGETITLE" />
            <meta property="og:description" content="$DESCRIPTION" />
            <meta property="og:type" content="website" />
            <meta property="og:image" content="$LOGOSOCIAL" />

    $CSS
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>

    <header id="document-head">
      <a href="$LOGOLINK" id="logo">
        <img src="$LOGO" />
      </a>
      <div id="header-profile">
        <a href="$LOGOUT" id="logout">Log in</a>
      </div>
    </header>
    
    <!-- ===============
    END SCAFFOLD_HEAD
    ================ -->
HTML;

$SCAFFOLD_FOOT = <<<HTML
    <!-- ===============
    BEGIN SCAFFOLD_FOOT
    ================ -->

    <div class='clearfix'></div>
    
    <footer id="document-foot">
      <img id="logo" src="$LOGO"/>
      <div class=copyright>$COPYRIGHT</div>
    </footer>
    
    <!-- Footer JS -->
    <script src="$JSURL/main.js"></script>
    <!--
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '$GOOGLEANALYTICSCODE', '$GOOGLEANALYTICSURL');
      ga('send', 'pageview');

    </script>
    -->
</body>
</html>
HTML;
?>