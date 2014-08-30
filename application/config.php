<?
/* ====================

    FIRM CIRCLET (Config)
    
    Find-in-file codes:
      #     :   Generic to-do
      @@@   :   View controlled by non-view module
      >>>   :   Extend/expand functionality here
      <<<   :   Reduce/contract functionality here
      !!!   :   Fix broken functionality
      
   ====================
*/

$CONFIG = [ 
  "PUBLIC" => [ 
    #
    "LESS"                  => true,
    "SCHEMAROOT"            => "Website",
    "STR" => [
      "PROJECTNAME"         => "Political Recruits",
      "PUBLISHER"           => ($PUBLISHER="Political Recruits, Ltd."),
      "DESCRIPTION"         => "Political Recruits is a global political job advertising website, dedicated to linking organisations and companies with the greatest political talent in the world.",
      "KEYWORDS"            => "political,recruit,world,job,talent,politics,advertise,organisation,company,work,recruiter",
      "COPYRIGHT"           => "$PUBLISHER &copy; ".date("Y"),
    ],
    "ANALYTICS" => [
      "CODE" => "UA-47411407-1",
      "URL"  => "baykara.co.uk"
    ],
    "URL" => [
      "ROOT"                => ($ROOTURL=""),
      "ASSET"               => ($ASSETURL="$ROOTURL/public"),
      "CSS"                 => "$ASSETURL/css",
      "JS"                  => "$ASSETURL/js",
      "IMG"                 => ($IMGURL="$ASSETURL/img"),
      "LOGO"                => "$IMGURL/img_logo.svg",
      "CONTROLLER"          => "$ROOTURL/application/controllers"
    ]
  ],
  "DIR" => [  
    "ROOT"                  => ($ROOTDIR="$_SERVER[DOCUMENT_ROOT]"),
    "LOGIC"                 => ($LOGICDIR="$ROOTDIR/application"),
    "CLASS"                 => "$LOGICDIR/classes",     // M
    "TEMPLATE"              => "$LOGICDIR/templates",   // V
    "CONTROLLER"            => "$LOGICDIR/controllers"  // C
  ],
  "DB" => [
    "HOST"                  => "localhost",
    "NAME"                  => "politicalrecruits",
    "USR"                   => "root",
    "PWD"                   => "macos100"
  ]
];

function __autoload($class_name) {
    global $CONFIG;
    include $CONFIG['DIR']['CLASS']."/$class_name.php";
}

$app = new Application($CONFIG);
?>