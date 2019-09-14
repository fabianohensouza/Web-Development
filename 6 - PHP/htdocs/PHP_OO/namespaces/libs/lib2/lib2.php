<?php

    namespace B;

    class Client implements RegistrationInterface {
        public $name = 'Sabrina';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
            echo '<hr>';
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function remove() {
            echo 'Removido.';
        }
    }

    interface RegistrationInterface {
        public function remove();
    }

?>