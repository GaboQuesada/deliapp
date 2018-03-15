<?php

class Connect {

    private $servername = "mysql.hostinger.es";
    private $username = "u868864184_deli";
    private $password = "admin123";
    private $dbname = "u868864184_deli";

    function __construct() {
        
    }

    public function conect() {

        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            
            @$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
    }
    
    public function test() {

        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            
            @$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo 'exito';
        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
    }

    
    
}
