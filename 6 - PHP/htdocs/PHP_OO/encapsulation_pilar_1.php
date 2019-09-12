<?php

    //Defining a model of the father object
    class Father {

        //Attributes
        private $name = 'José';
        protected $surname = 'Raimundo';
        public $mood = 'Feliz';

        public function __construct() {

            echo '<hr><pre>';
            print_r(get_class_methods($this));
            echo '</pre><hr>';
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }
        
        private function execCraze() {
            echo 'Executando Mania!</br>';
        }
        
        protected function reply() {
            echo 'Respondendo!</br>';
        }
        
        public function execAction($action) {
            $this->$action();
        }

    }

    //Defining a model of the child object
    class Son extends Father {  

        //Attributes
        private $age = 0;

        public function __construct() {

            echo '<hr><pre>';
            print_r(get_class_methods($this));
            echo '</pre><hr>';
        }
        
        private function execCraze() {
            echo 'Executando Mania!</br>';
        }

        public function execPrivateLocalScope() {
            $this->$execCraze();
        }
        

        public function __getAttr($attr) {
            return $this->$attr;
        }

        public function __setAttr($attr, $value) {
            $this->$attr = $value;
        }
        
    }

    //Instancing a object
    $father = new Father();
    $son = new Son();

    //Accessing a public attribute
    echo $father->mood . '</br>';

    //Changing the value of a public attr
    $son->mood = 'Triste';
    echo $son->mood . '</br><hr>';

    //Accessing a private and protected attribute - Wrong Way
    /*echo $son->name . '</br>';
    echo $father->name . '</br>';
    echo $son->surname . '</br>';
    echo $father->surname . '</br><hr>';*/

    //Accessing a private and protected attribute - Rigth Way
    echo $son->__get('name') . '</br>';
    echo $son->__get('surname') . '</br>';
    echo $son->__get('mood') . '</br>';
    echo $father->__get('name') . '</br>';
    echo $father->__get('surname') . '</br>';
    echo $father->__get('mood') . '</br><hr>';

    //Changing a private and protected attribute - Rigth Way
    $father-> __set('surname','Henrique');
    $father->__set('name', 'Hermano');
    $son->__setAttr('name', 'Carlindo');
    $son->__setAttr('surname', 'Carlos');
    $son->__setAttr('age', '19');

    echo '<hr><pre>';
    print_r($son);
    echo '</pre><hr>';
    echo '<hr><pre>';
    print_r(get_class_methods($father));
    print_r(get_class_methods($son));
    echo '</pre><hr>';

    echo $son->__getAttr('name') . ' ';
    echo $son->__getAttr('surname') . ' - ';
    echo $son->__getAttr('age') . ' anos!</br>';
    echo $father->__get('name') . ' ';
    echo $father->__get('surname') . '</br><hr>';
    
    /*echo $son->$name;
    echo ' ';
    echo $son->$surname;
    echo '</br>';
    echo $father->$name;
    echo ' ';
    echo $father->$surname;
    echo '</br><hr>';*/

    //Call function trough a interface
    $son->execAction('execCraze');
    $son->execAction('reply');
    $son->execPrivateLocalScope();
    echo '<hr>';
    $father->execAction('execCraze');
    $father->execAction('reply');
    



?>