<?php

class Task {

    //The attributes are equals to fields of the table
    private $id;
    private $id_status;
    private $task;
    private $register_date;

    public function __get($attrib) {
        return $this->$attrib;
    }

    public function __set($attrib, $value) {
        $this->$attrib = $value;
    }
}

?>