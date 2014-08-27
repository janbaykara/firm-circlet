<?php
    class Application {
        //Configuration switches
        public $LESS;
        //Arbitraty global strings
        public $PUBLISHER;
        public $PROJECTNAME;
        public $DESCRIPTION;
        public $KEYWORDS;
        public $PAGETITLE;
        // Generated strings;
        public $COPYRIGHT;
        // Miscellaneous;
        public $SCHEMAROOT;
        public $GOOGLEANALYTICSCODE;
        public $GOOGLEANALYTICSURL;
        // Security;
        public $PRIVATEKEY;
        // SQL Database;
        public $DB_HOST;
        public $DB_NAME;
        public $DB_USR;
        public $DB_PWD;
        // Paths;
        public $BASEDIR;
        public $CLASSES;
        public $TEMPLATES;
        public $CONTROLLERS;
        // URLs;
        public $BASEURL;
        public $ASSETURL;
        public $CSSURL;
        public $JSURL;
        public $IMGURL;
        public $LOGO;
        // Render variables
        private $headers;
        private $footers;
        private $view;

        public function __construct($vars) {
            // Init global vars
            foreach($vars as $prop => $val) {
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

        public function render() {
            foreach($this->headers as $header) {
                include $header;
            }

            $this->view->render();

            foreach($this->footers as $footer) {
                include $footer;
            }
        }
      
        public function getPDOConnection() {
            // Thanks to the static-specifier, this variable will be initialized only once.
            $this->PDO = new PDO("mysql:host=$this->DB_HOST;charset=utf8;dbname=$this->DB_NAME", $this->DB_USR, $this->DB_PWD);
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->PDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $this->PDO;
        }

        public function addHeader($file) {
            $this->headers[] = "$this->TEMPLATES/$file";
        }

        public function addFooter($file) {
            $this->footers[] = "$this->TEMPLATES/$file";
        }

        public function setView(View $view) {
            $this->view = $view;
            $this->PAGETITLE = $this->view->title;
        }
    }
?>