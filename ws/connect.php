<?php



class Connect {

    private $servername;
    private $username;
    private $password;
    private $dbname;

    function __construct($data) {
       
        $pr = new Settings($data);

        $this->servername = $pr->getSERVER();
        $this->username = $pr->getUSER();
        $this->password =$pr->getPASWORD();
        $this->dbname = $pr->getBD();
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
