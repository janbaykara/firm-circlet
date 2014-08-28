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
        private $headers;
        private $footers;

        public function __construct($title,$vars) {
            foreach($vars as $prop => $val) {
              $this->$prop = $val;
            }
            $this->PAGETITLE = $title;
        }

        public function __destruct() {
            // clean up here
        }
      
        public function addHeader($file) {
            $this->headers[] = $file;
        }

        public function setContent($content) {
            $this->content = $content;
        }

        public function addFooter($file) {
            $this->footers[] = $file;
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