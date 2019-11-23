<?php

class Connection {

    private $host = 'sql209.epizy.com';
    private $dbname = 'epiz_24808359_taskapp';
    private $user = '	epiz_24808359';
    private $pass = 'cTOzVm2zxWGDL';

    public function connect() { //create
        try {

            $connection = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            return $connection;

        } catch (PDOexception $e) {
            echo '<p>'.$e->getMessage().'</p>';
        }
    }
}

?>
