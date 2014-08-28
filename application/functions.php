<?php

function __autoload($class_name) {
    global $APPLICATION;
    include "$APPLICATION[CLASSES]/$class_name.php";
}

function timeOfDay() {
  $HR = date('H');
  if($HR < 3 || $HR > 17) { $TIMEOFDAY = "Evening"; } 
       else if ($HR < 12) { $TIMEOFDAY = "Morning"; } 
                     else { $TIMEOFDAY = "Afternoon"; };
  return $TIMEOFDAY;
}