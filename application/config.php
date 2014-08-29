<?
$APPLICATION = [
  // Internal paths
  "BASEDIR"             => ($BASEDIR="$_SERVER[DOCUMENT_ROOT]/politicalrecruits"),
  "CLASSES"             => "$BASEDIR/application/classes",
  "TEMPLATES"           => "$BASEDIR/application/templates",
  "CONTROLLERS"         => "$BASEDIR/application/controllers"
];

$DATABASE = [
  // Database
  "DB_HOST"             => "localhost",
  "DB_NAME"             => "politicalrecruits",
  "DB_USR"              => "root",
  "DB_PWD"              => "macos100"
];

$PUBLIC = [
  "LESS"                => true,
  // External paths
  "BASEURL"             => ($BASEURL="http://localhost:8888/politicalrecruits"),
  "ASSETURL"            => ($ASSETURL="$BASEURL/public"),
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

function __autoload($class_name) {
    global $APPLICATION;
    include "$APPLICATION[CLASSES]/$class_name.php";
}

$app = new Application($APPLICATION);
?>