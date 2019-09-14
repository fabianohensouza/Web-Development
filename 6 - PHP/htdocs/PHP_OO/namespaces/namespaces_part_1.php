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

    namespace B;

    class Client implements RegistrationInterface, \A\RegistrationInterface {
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

        public function save() {
            echo 'Salvo.';
        }
    }

    interface RegistrationInterface {
        public function remove();
    }

    $client1 = new Client();
    echo '<pre>';
    print_r($client1);
    echo '</pre>';
    echo $client1->__get('name');
    echo '<hr>';

    //Instancing a class of namespace A
    $client2 = new \A\Client();
    echo '<pre>';
    print_r($client2);
    echo '</pre>';
    echo $client2->__get('name');
    echo '<hr>';

    $client1->remove();
    echo '<br>';
    $client2->save();

?>