<?php

class Connection {

    private $host = 'localhost';
    private $dbname = 'php_with_pdo';
    private $user = 'root';
    private $pass = '';

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