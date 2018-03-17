<?php

class Settings {

    private $servicio;
    private $SERVERLOCAL = "something";
    private $PASWORDLOCAL = "something";
    private $USERlOCAL = "something";
    private $BDLOCAL = "something";
    private $SERVERREMOTO = "mysql.hostinger.es";
    private $PASWORDREMOTO = "something";
    private $USERREMOTO = "admin123";
    private $DBREMOTO = "u868864184_deli";

    function __construct($servicio) {
        $this->servicio = $servicio;
    }

    function getSERVER() {
        if ($this->servicio == "local") {
            return $this->SERVERLOCAL;
        } else {
            return $this->SERVERREMOTO;
        }
    }

    function getPASWORD() {
        if ($this->servicio == "local") {
            return $this->SERVERLOCAL;
        } else {
            return $this->SERVERREMOTO;
        }
    }

    function getUSER() {
        if ($this->servicio == "local") {
            return $this->SERVERLOCAL;
        } else {
            return $this->SERVERREMOTO;
        }
    }

    function getBD() {
       if ($this->servicio == "local") {
            return $this->SERVERLOCAL;
        } else {
            return $this->SERVERREMOTO;
        }
    }

}

?>
