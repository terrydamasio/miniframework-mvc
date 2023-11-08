<?php
    namespace App;
    
    class Connection {

        private $host = 'localhost';
        private $dbname = 'mvc';
        private $user = 'root';
        private $pass = 'root';

        public function getDb() {
            try {
                $conn = new \PDO(
                    "mysql:host=$this->host;dbname=$this->dbname", 
                    $this->user, 
                    $this->pass
                );

                return $conn;

            } catch(\PDOException $e) {
                echo "Opa " . $e->getMessage() . " - " . $e->getCode();
            }
        }
    }