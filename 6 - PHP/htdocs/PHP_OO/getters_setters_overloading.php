<?php

    //Defining a model of tha object
    class Employee {  //Class name in CamelCase

        //Attributes
        public $name =  null;
        public $phoneNumber =  null;
        public $childrenNumber =  null;
        public $position =  null;
        public $wage =  null;


        //Getters & Setters (Overloading)
        function __set($attribute, $value) {
            $this->$attribute = $value;
        }

        function __get($attribute) {
            return $this->$attribute;
        }

        //Methods
        function summarizeEmplRegistration() {
            return 'O funcionário ' . $this->__get('name') . ' possui ' . $this->__get('childrenNumber') . '  filhos e seu telefone é ' . $this->__get('phoneNumber') . '.</br> Seu cargo é: ' . $this->__get('role') . ' e seu salario atual é R$' . $this->__get('wage') . '.</br>';
        }

        function modifyChildrenNumber($newChildrenNumber) {
            $this->__set('childrenNumber', $newChildrenNumber);
        }

    }

    //Instancing a object
    $newEmployee = new Employee();
    $newEmployee2 = new Employee();

    //Changing attributes
    $newEmployee->__set('name', 'Antonio');
    $newEmployee->__set('phoneNumber', '31 - 3248-8888');
    $newEmployee->__set('childrenNumber', 2);
    $newEmployee->__set('role', 'Assistente');
    $newEmployee->__set('wage', 2300,00);

    $newEmployee2->__set('name', 'Marcela');
    $newEmployee2->__set('phoneNumber', '31 - 1515-5151');
    $newEmployee2->__set('childrenNumber', 4);
    $newEmployee2->__set('role', 'Analista');
    $newEmployee2->__set('wage', 3500,00);

    //Call a method of the object
    echo $newEmployee->summarizeEmplRegistration();
    $newEmployee->modifyChildrenNumber(1);
    echo $newEmployee->summarizeEmplRegistration();
    echo '<hr>';
    echo $newEmployee2->summarizeEmplRegistration();
    $newEmployee2->modifyChildrenNumber(3);
    echo $newEmployee2->summarizeEmplRegistration();

?>