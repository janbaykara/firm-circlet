<?php
    class Application {
      
        // Global config
        //Configuration switches
        public $LESS                 ;
        public $PUBLISHER            ;
        public $PROJECTNAME          ;
        public $PAGETITLE            ;
        public $DESCRIPTION          ;
        public $KEYWORDS             ;
        // Generated strings  ;
        public $COPYRIGHT            ;
        // Miscellaneous  ;
        public $SCHEMAROOT           ;
        public $GOOGLEANALYTICSCODE  ;
        public $GOOGLEANALYTICSURL   ;
        // Security ;
        public $PRIVATEKEY           ;
        // Paths  ;
        public $BASEDIR              ;
        public $CLASSES              ;
        public $TEMPLATES            ;
        public $CONTROLLERS          ;
        // URLs ;
        public $BASEURL              ;
        public $ASSETURL             ;
        public $CSSURL               ;
        public $JSURL                ;
        public $IMGURL               ;
        public $LOGO                 ;
        public $LOGOSOCIAL           ;
        public $LOGOLINK             ;
      
        // Render variables
        private $headers;
        private $footers;
        private $view;

        public function __construct($vars) {
            // Init global vars
            foreach($vars as $prop => $val) {
              $this->$prop = $val;
            }
          
            $this->COPYRIGHT    = $this->PUBLISHER." &copy; ".date("Y");
            $this->BASEDIR      = $_SERVER["DOCUMENT_ROOT"]."/politicalrecruits";
            $this->CLASSES      = "$this->BASEDIR/php/classes";
            $this->TEMPLATES    = "$this->BASEDIR/php/templates";
            $this->CONTROLLERS  = "$this->BASEDIR/php/controllers";
            $this->ASSETURL     = $this->BASEURL;
            $this->CSSURL       = $this->ASSETURL."/css";
            $this->JSURL        = $this->ASSETURL."/js";
            $this->IMGURL       = $this->ASSETURL."/img";
            $this->LOGO         = $this->IMGURL."/logo.png";
            $this->LOGOSOCIAL   = $this->LOGO;
            $this->LOGOLINK     = $this->BASEURL;
          
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

        public function addHeader($file) {
            $this->headers[] = "$this->TEMPLATES/$file";
        }

        public function addFooter($file) {
            $this->footers[] = "$this->TEMPLATES/$file";
        }

        public function setView(View $view) {
            $this->view = $view;
        }
    }
?>