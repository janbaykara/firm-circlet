<?php
    class View {
        // Class vars
        private $content;
        private $headers;
        private $footers;

        public function __construct($PUBLIC_VARS,$title) {
            $PUBLIC_VARS['PAGETITLE'] = $title;
            foreach($PUBLIC_VARS as $key => $val) {
              $this->$key = $val;
            }
        }
      
        public function controller($file) {
          return $this->CONTROLLERS."/$file.php";
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