<?php

    //Defining a model of tha object
    class Employee {  //Class name in CamelCase

        //Attributes
        public $name =  null;
        public $phoneNumber =  null;
        public $childrenNumber =  null;

        //Getters & Setters
        function setName($name) {
            $this->name = $name;
        }

        function setChildrenNumber($childrenNumber) {
            $this->childrenNumber = $childrenNumber;
        }

        function setPhoneNumber($phoneNumber) {
            $this->phoneNumber = $phoneNumber;
        }

        function getName() {
            return $this->name;
        }

        function getChildrenNumber() {
            return $this->childrenNumber;
        }

        function getPhoneNumber() {
            return $this->phoneNumber;
        }

        //Methods
        function summarizeEmplRegistration() {
            return 'O funcionário ' . $this->getName() . ' possui ' . $this->getChildrenNumber() . '  filhos e seu telefone é ' . $this->getPhoneNumber() . '.</br>';
        }

        function modifyChildrenNumber($newChildrenNumber) {
            $this->setChildrenNumber($newChildrenNumber);
        }

    }

    //Instancing a object
    $newEmployee = new Employee();
    $newEmployee2 = new Employee();

    //Changing attributes
    $newEmployee->setName('Antonio');
    $newEmployee->setPhoneNumber('31 - 3248-8888');
    $newEmployee->setChildrenNumber(2);

    $newEmployee2->setName('Marcela');
    $newEmployee2->setPhoneNumber('31 - 1515-5151');
    $newEmployee2->setChildrenNumber(4);

    //Call a method of the object
    echo $newEmployee->summarizeEmplRegistration();
    $newEmployee->modifyChildrenNumber(1);
    echo $newEmployee->summarizeEmplRegistration();
    echo '<hr>';
    echo $newEmployee2->summarizeEmplRegistration();
    $newEmployee2->modifyChildrenNumber(3);
    echo $newEmployee2->summarizeEmplRegistration();

?>