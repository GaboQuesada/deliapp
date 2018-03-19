<?php

class Settings {

    private $servicio;
    private $data;

    function __construct($datas) {
       
        $this->data = $datas;
        $this->servicio = $this->data['configType'];
    }

    function getSERVER() {
        if ($this->servicio == "local") {
            return $this->data['configServerLocal']['servername'];     
        } else { 
           return  $this->data['configServerRemoto']['servername'];
        }
    }

    function getPASWORD() {
        if ($this->servicio == "local") {
            return $this->data['configServerLocal']['password']; 
        } else { 
           return  $this->data['configServerRemoto']['password'];
        }
    }

    function getUSER() {
        if ($this->servicio == "local") {
            return $this->data['configServerLocal']['username']; 
        } else { 
           return  $this->data['configServerRemoto']['username']; 
        }
    }

    function getBD() {
       if ($this->servicio == "local") {
            return $this->data['configServerLocal']['dbname'];
        } else { 
           return  $this->data['configServerRemoto']['dbname'];
        }
    }
    
     function getUrlRoot() {
       if ($this->servicio == "local") {
            return $this->data['LocalUrl']['root'];
        } else { 
           return  $this->data['RemotoUrl']['root'];
        }
    }

}

?>
