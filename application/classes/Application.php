<?php
    class Application {
        // SQL Database;
        private $DB_HOST;
        private $DB_NAME;
        private $DB_USR;
        private $DB_PWD;
        // Render variables
        public $view;

        public function __construct($APPLICATION_VARS) {
            // Init global vars
            foreach($APPLICATION_VARS as $prop => $val) {
              $this->$prop = $val;
            }
          
            // Init render
            $this->headers = array();
            $this->footers = array();
            session_start(); # REPLACE THIS WITH new Session();
        }

        public function __destruct() {
            // clean up here
        }
      
        public function getDatabaseConnection() {
            // Thanks to the static-specifier, this variable will be initialized only once.
            $this->PDO = new PDO("mysql:host=$this->DB_HOST;charset=utf8;dbname=$this->DB_NAME", $this->DB_USR, $this->DB_PWD);
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->PDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $this->PDO;
        }

        public function setView(View $view) {
            $this->view = $view;
        }
    }
?>