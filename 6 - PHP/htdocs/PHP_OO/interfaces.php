<?php

    interface EletronicEquipamentInterface {
        
        public function PowerOn();        
        public function PowerOff();

    }

    class Refrigerator implements EletronicEquipamentInterface {
        
        public function openDoor() {
            echo 'Abrir porta</br>';
        }

        public function PowerOn() {
            echo 'Ligar Geladeira</br>';
        }

        public function PowerOff() {
            echo 'Desigar Geladeira</br>';
        }
         
    }

    class Television implements EletronicEquipamentInterface {
        
        public function changeChannel() {
            echo 'Trocar Canal</br>';
        }

        public function PowerOn() {
            echo 'Ligar TV</br>';
        }

        public function PowerOff() {
            echo 'Desigar TV</br>';
        }

    }

    $refrigerator = new Refrigerator();
    $television = new Television();

    $refrigerator->openDoor();
    $refrigerator->PowerOn();
    $refrigerator->PowerOff();
    echo '<br>';
    $television->changeChannel();
    $television->PowerOn();
    $television->PowerOff();
    echo '<hr>';

?>