<?php
    class View {
        //External vars
        public $PAGETITLE;
        //Configuration switches
        public $LESS;
        //Arbitraty global strings
        public $PUBLISHER;
        public $PROJECTNAME;
        public $DESCRIPTION;
        public $KEYWORDS;
        // Generated strings;
        public $COPYRIGHT;
        // Miscellaneous;
        public $SCHEMAROOT;
        public $GOOGLEANALYTICSCODE;
        public $GOOGLEANALYTICSURL;
        // URLs;
        public $BASEURL;
        public $ASSETURL;
        public $CSSURL;
        public $JSURL;
        public $IMGURL;
        public $LOGO;
        
        // Class vars
        private $content;
        public $headers;
        public $footers;

        public function __construct($title,$vars) {
            foreach($vars as $prop => $val) {
              $this->$prop = $val;
            }
            $this->PAGETITLE = $title;
        }

        public function __destruct() {
            // clean up here
        }
      
        public function addHeader($location,$file) {
            $this->headers[$file] = "$location/$file.php";
        }

        public function addFooter($location,$file) {
            $this->footers[$file] = "$location/$file.php";
        }

        public function setContent($content) {
            $this->content = $content;
        }
      
        public function render() {
            // Header
            foreach($this->headers as $header) {
                include $header;
            }
          
            // Body
            echo $this->content;
          
            // Footers
            foreach($this->footers as $footer) {
                include $footer;
            }
        }
    }
?>