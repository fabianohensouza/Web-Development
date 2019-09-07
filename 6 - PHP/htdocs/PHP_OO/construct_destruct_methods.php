<?php

    //Defining a model of tha object
    class Person {  

        //Attributes
        public $name =  null;

        //Constructor method - Executed automatically in the object instance
        function __construct($name) {
            $this->name = $name;
            echo "Olá $this->name, tudo bem?</br>";
        }

        //Destructor method - Executed when the unset function is called
        function __destruct() {
            echo 'O objeto foi destruído</br>';
        }

        function __get($attribute) {
            return $this->$attribute;
        }

        function run() {
            return $this->__get('name') . ' está correndo agora!</br>';
        }
    }

    //Instancing a object
    $person = new Person('Fabiano');
    echo $person->run();

    //Destructing an object
    unset($person);
    echo '<hr>Será exibido um erro abaixo pois o objeto foi removido!</br>';
    echo $person->run();

?>