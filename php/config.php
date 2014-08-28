<?
$INTERNAL = [
  // System config
  "PRIVATEKEY"          => "deathtothewestonlykiddingthat'dbehilarious",
  // Database
  "DB_HOST"             => "localhost",
  "DB_NAME"             => "politicalrecruits",
  "DB_USR"              => "root",
  "DB_PWD"              => "macos100",
  // Internal paths
  "BASEDIR"             => ($BASEDIR="$_SERVER[DOCUMENT_ROOT]/politicalrecruits"),
  "CLASSES"             => "$BASEDIR/php/classes",
  "TEMPLATES"           => "$BASEDIR/php/templates",
  "CONTROLLERS"         => "$BASEDIR/php/controllers"
];

$EXTERNAL = [
  "LESS"                => true,
  // External paths
  "BASEURL"             => ($BASEURL="http://localhost:8888/politicalrecruits"),
  "ASSETURL"            => ($ASSETURL="$BASEURL/ui"),
  "CSSURL"              => "$ASSETURL/css",
  "JSURL"               => "$ASSETURL/js",
  "IMGURL"              => ($IMGURL="$ASSETURL/img"),
  "LOGO"                => "$IMGURL/img_logo.svg",
  // Project strings
  "PROJECTNAME"         => "Political Recruits",
  "PUBLISHER"           => ($PUBLISHER="Political Recruits, Ltd."),
  "DESCRIPTION"         => "Political Recruits is a global political job advertising website, dedicated to linking organisations and companies with the greatest political talent in the world.",
  "KEYWORDS"            => "political,recruit,world,job,talent,politics,advertise,organisation,company,work,recruiter",
  "COPYRIGHT"           => "$PUBLISHER &copy; ".date("Y"),
  // Misc defs
  "SCHEMAROOT"          => "Website",
  "GOOGLEANALYTICSCODE" => "UA-47411407-1",
  "GOOGLEANALYTICSURL"  => "baykara.co.uk"
];

require("$INTERNAL[BASEDIR]/php/functions.php");

$app = new Application($INTERNAL);
?>