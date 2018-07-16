<?php

class bdconect {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    function __construct() {



      
        
        $this->servername = "sql135.main-hosting.eu." ;
        $this->username = "u868864184_deli";
        $this->password = "toakGQtckRz0FHUecM";
        $this->dbname = "u868864184_deli";
    }

    public function getServername() {
        return $this->servername;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDbname() {
        return $this->dbname;
    }

        
    public function conect() {

        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conn;
        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function test() {

        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo 'exito en out';
        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function close() {
        $this->conn = null;
    }

}
