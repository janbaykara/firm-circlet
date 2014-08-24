<?php
    class View {
        private $title;
        private $content;

        public function __construct($title) {
            $this->title = $title;
        }

        public function __destruct() {
            // clean up here
        }

        public function render() {
            echo $this->content;
        }

        public function setContent($content) {
            $this->content = $content;
        }
    }
?>