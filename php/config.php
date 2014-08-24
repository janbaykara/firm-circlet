<?

$config = [
  "BASEDIR"             => $_SERVER["DOCUMENT_ROOT"]."/politicalrecruits",
  "LESS" => true,
  "PUBLISHER" => "Political Recruits Ltd.",
  "PROJECTNAME" => "Political Recruits",
  "DESCRIPTION" => "...",
  "KEYWORDS" => "...",
  "SCHEMAROOT" => "Website",
  "GOOGLEANALYTICSCODE" => "UA-47411407-1",
  "GOOGLEANALYTICSURL" => "baykara.co.uk",
  "PRIVATEKEY" => "deathtothewestonlykiddingthat'dbehilarious",
  "BASEURL" => "http://localhost:8888/politicalrecruits",
];

require($config['BASEDIR']."/php/functions.php");

$app = new Application($config);

$app->addHeader("header.php");
$app->addFooter("footer.php");

/*
"LESS               " => true,
"PUBLISHER          " => "Political Recruits Ltd.",
"PROJECTNAME        " => "Political Recruits",
"PAGETITLE          " => $PROJECTNAME,
"DESCRIPTION        " => "...",
"KEYWORDS           " => "...",
"COPYRIGHT          " => $PUBLISHER." &copy; ".date("Y"),
"SCHEMAROOT         " => "Website",
"GOOGLEANALYTICSCODE" => "UA-47411407-1",
"GOOGLEANALYTICSURL " => "baykara.co.uk",
"PRIVATEKEY         " => "deathtothewestonlykiddingthat'dbehilarious",
"BASEDIR            " => $_SERVER["DOCUMENT_ROOT"]."/politicalrecruits",
"CLASSES            " => "$BASEDIR/php/classes",
"TEMPLATES          " => "$BASEDIR/php/templates",
"CONTROLLERS        " => "$BASEDIR/php/controllers",
"BASEURL            " => "http://localhost:8888/politicalrecruits",
"ASSETURL           " => $BASEURL;
"CSSURL             " => $ASSETURL."/css",
"JSURL              " => $ASSETURL."/js",
"IMGURL             " => $ASSETURL."/img",
"LOGO               " => $IMGURL."/logo.png",
"LOGOSOCIAL         " => $LOGO,
"LOGOLINK           " => $BASEURL
*/