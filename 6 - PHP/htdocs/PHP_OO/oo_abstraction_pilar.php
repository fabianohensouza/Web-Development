<?php

    //Defining a model of tha object
    class Employee {  //Class name in CamelCase

        //Attributes
        public $name = 'José';
        public $phoneNumber = '31-3222-1515';
        public $childrenNumber = 2;

        //Methods
        function summarizeEmplRegistration() {
            return "O funcionário $this->name possui $this->childrenNumber filhos e seu telefone é $this->phoneNumber</br>";
        }

        function modifyChildrenNumber($newChildrenNumber) {
            $this->childrenNumber=$newChildrenNumber;
        }

    }

    //Instancing a object
    $newEmployee = new Employee();
    //Call a method of the object
    echo $newEmployee->summarizeEmplRegistration();
    $newEmployee->modifyChildrenNumber(9);
    echo $newEmployee->summarizeEmplRegistration();
    echo '<hr>';
    $newEmployee2 = new Employee();
    echo $newEmployee2->summarizeEmplRegistration();
    $newEmployee2->modifyChildrenNumber(1);
    echo $newEmployee2->summarizeEmplRegistration();

?>