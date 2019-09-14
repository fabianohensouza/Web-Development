<?php

   interface AnimalInterface {        
        public function eat();
    }
    
    interface BirdInterface extends AnimalInterface {        
        public function fly();
    }

    class Parrot implements BirdInterface {
        
        public function eat() {
            echo 'Comer</br>';
        }

        public function fly() {
            echo 'Andar</br>';
        }

    }

    $parrot = new Parrot();

    $parrot->fly();
    $parrot->eat();
    echo '<hr>';

    //--------------------

    class Animal {

        public function eat() {
            echo 'Comer</br>';
        }
    }

    class Eagle extends Animal implements BirdInterface {

        public function fly() {
            echo 'Andar</br>';
        }
    }

    $eagle = new Eagle();

    $eagle->fly();
    $eagle->eat();
    echo '<hr>'

?>