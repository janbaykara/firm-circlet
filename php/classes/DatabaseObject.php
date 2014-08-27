<?php

abstract class DatabaseObject {

  # Consider using PROPEL
  # http://propelorm.org/documentation/03-basic-crud.html
  
  /*
  The ability to browse through all or selected occurrences (rows).
  The ability to define selection criteria in order to retrieve selected occurrences.
  The ability to create/insert new occurrences.
  The ability to read/enquire the details of existing occurrences.
  The ability to amend/update existing occurrences.
  The ability to delete existing occurrences.
  */
  
  public $PDO;
  
  function __construct(PDO $db) {
    $this->PDO = $db;
  }
  
  /*
  function get() {
    // SELECT author.id, author.first_name, author.last_name
    // FROM `author`
    // WHERE author.id = 1
    // LIMIT 1;
  }
  
  function update($fieldarray) {
    // ...
  }
  
  function delete($fieldarray) {
    // ...
  }

  function set($fieldarray) {
    // INSERT INTO author (first_name, last_name) VALUES ('Jane', 'Austen');
  }
  */
}