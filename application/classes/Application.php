<?php
    class Application {
        // Render variables
        public $view;

        public function __construct($APPLICATION_VARS) {
            // Init global vars
            foreach($APPLICATION_VARS as $prop => $val) {
              $this->$prop = $val;
            }
            session_start(); # REPLACE THIS WITH new Session();
        }

        public function setView(View $view) {
            $this->view = $view;
        }
    }
?>