<?php

    //Defining a model of the father object
    class Father {

        //Attributes
        private $name = 'José';
        protected $surname = 'Raimundo';
        public $mood = 'Feliz';

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
        private $age;
        
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
    echo $father->__get('name') . '</br>';
    echo $son->__get('surname') . '</br>';
    echo $father->__get('surname') . '</br><hr>';

    //Changing a private and protected attribute - Rigth Way
    $father-> __set('surname','Henrique');
    $son->__set('name', 'Antonio');
    $father->__set('name', 'Carlos');
    $son->__set('surname', 'Maria');
    $son->__set('age', '19');

    /*echo $son->__get('name') . ' ';
    echo $son->__get('surname') . ' - ';
    echo $son->__get('age') . ' anos!</br>';
    echo $father->__get('name') . ' ';
    echo $father->__get('surname') . '</br><hr>';*/
    
    echo $son->$name;
    echo ' ';
    echo $son->$surname;
    echo '</br>';
    echo $father->$name;
    echo ' ';
    echo $father->$surname;
    echo '</br><hr>';

    //Call function trough a interface
    $father->execAction('execCraze');
    $father->execAction('reply');
    echo '<hr>';
    $father->execAction('execCraze');
    $father->execAction('reply');
    



?>