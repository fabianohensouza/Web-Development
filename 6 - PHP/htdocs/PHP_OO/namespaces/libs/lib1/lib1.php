<?php

    //Creating namespaces
    namespace A;

    class Client implements RegistrationInterface {
        public $name = 'Fabiano';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
            echo '<hr>';
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function save() {
            echo 'Salvo.';
        }
    }

    interface RegistrationInterface {
        public function save();
    }
    
?>