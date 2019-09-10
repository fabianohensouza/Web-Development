<?php

    //Defining a model of the father object
    class Vehicle {

        //Attributes
        public $plate =  null;
        public $collor =  null;

        function speedUp() {
            echo 'Acelerar!</br>';
        }

        function breakUp() {
            echo 'Freiando!</br>';
        }

        function shiftGear() {
            echo 'Pé na embreagem - Mão na marcha!</br>';
        }

    }

    //Defining a model of the child object
    class Car extends Vehicle {  

        //Attributes
        public $sunroof =  null;

        //Constructor method - Executed automatically in the object instance
        function __construct($plate, $collor, $sunroof) {
            $this->plate = $plate;
            $this->collor = $collor;
            $this->sunroof = $sunroof;
            echo "O carro $this->collor, placa $this->plate, $this->sunroof solar foi criado.</br>";
        }

        function __get($attribute) {
            return $this->$attribute;
        }

        function openSunRoof() {
            if ($this->sunroof == 'com teto') {
                echo 'Teto solar abrto!</br>';
            } else {
                echo 'Este carro não possui teto solar!</br>';
            }
        }

        function spinSteering() {
            echo 'Girar volante!</br>';
        }
    }

    //Defining a model of the child object
    class MotorCycle extends Vehicle {  

        //Attributes
        public $counterweight_handlebar =  null;

        //Constructor method - Executed automatically in the object instance
        function __construct($plate, $collor, $counterweight_handlebar) {
            $this->plate = $plate;
            $this->collor = $collor;
            $this->counterweight_handlebar = $counterweight_handlebar;
            echo "A moto $this->collor, placa $this->plate, $this->counterweight_handlebar foi criada.</br>";
        }

        function __get($attribute) {
            return $this->$attribute;
        }

        function cram() {
            echo 'Moto empinada!</br>';
        }

        function shiftGear() {
            echo 'Mão na embreagem - Pé na marcha!</br>';
        }
        
    }

    class Truck extends Vehicle {
    }

    //Instancing a object
    $motorCycle = new MotorCycle('OOO-9999', 'Amarela', 'com contra-peso de guidão');
    $car = new Car('XXX-1234', 'Verde', 'sem teto');
    $truck = new Truck();
    
    echo '<hr><pre>';
    print_r($car);
    print_r($motorCycle);
    print_r($truck);
    echo '</pre><hr>';

    $car->speedUp();
    $car->openSunRoof();
    $car->spinSteering();
    $car->breakUp();
    $car->shiftGear();
    echo '<hr>';
    $motorCycle->speedUp();
    $motorCycle->cram();
    $motorCycle->breakUp();
    $motorCycle->shiftGear();
    echo '<hr>';
    $truck->speedUp();
    $truck->breakUp();
    $truck->shiftGear();
    echo '<hr>';

?>