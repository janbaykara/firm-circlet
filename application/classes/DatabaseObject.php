<?php

abstract class DatabaseObject {
  # Consider using PROPEL
  // http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers
  
  public $PDO;
  
  function __construct($dbconfig) {
    foreach($dbconfig as $k => $v) {
      $this->$k = $v;
    }
    $this->getPDOConnection();
  }
      
  protected function getPDOConnection() {
    // Thanks to the static-specifier, this variable will be initialized only once.
    try {
      $this->PDO = new PDO(
        "mysql:host=$this->HOST;charset=utf8;dbname=$this->NAME",
        $this->USR,
        $this->PWD,
        [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]
      );
      return $this->PDO;
    } catch (PDOException $e) {
        die('There was an error connecting to the database: ' . $e->getMessage()); //@@@ERRORCODE
    }
  }
}