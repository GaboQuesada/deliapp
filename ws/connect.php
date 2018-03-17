<?php

include './settings.php';

class Connect {

    private $servername;
    private $username;
    private $password;
    private $dbname;

    function __construct($servicio) {
        $set = new Settings($servicio);
        $servername;
        $username;
        $password;
        $dbname;
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
