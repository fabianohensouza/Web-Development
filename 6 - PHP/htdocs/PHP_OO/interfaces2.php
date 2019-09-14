<?php

   interface TerrestrialInterface {        
        public function walk();
    }
    
    interface MammalInterface {        
        public function breath();
    }
    
    interface AquaticInterface {        
        public function swin();
    }

    class Human implements TerrestrialInterface, MammalInterface {
        
        public function takl() {
            echo 'Conversar</br>';
        }

        public function walk() {
            echo 'Andar</br>';
        }

        public function breath() {
            echo 'Respirar</br>';
        }
         
    }

    class Whale implements AquaticInterface, MammalInterface {
        
        public function skirt() {
            echo 'Esguichar</br>';
        }

        public function swin() {
            echo 'Nadar</br>';
        }

        public function breath() {
            echo 'Respirar</br>';
        }

    }

    $human = new Human();
    $whale = new Whale();

    $human->takl();
    $human->walk();
    $human->breath();
    echo '<br>';
    $whale->skirt();
    $whale->swin();
    $whale->breath();
    echo '<hr>';

?>