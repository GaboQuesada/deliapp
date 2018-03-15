<?php

include './connect.php';

class Producto {

    private $id;
    private $idHeredado;
    private $grupo;
    private $familia;
    private $precio;
    private $descrip;

    function __construct() {
        $conexion = new Connect();
        $this->conn = $conexion->conect();
    }

    function getId() {
        return $this->id;
    }

    function getIdHeredado() {
        return $this->idHeredado;
    }

    function getGrupo() {
        return $this->grupo;
    }

    function getFamilia() {
        return $this->familia;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getDescrip() {
        return $this->descrip;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdHeredado($idHeredado) {
        $this->idHeredado = $idHeredado;
    }

    function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    function setFamilia($familia) {
        $this->familia = $familia;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setDescrip($descrip) {
        $this->descrip = $descrip;
    }
    
    public function insert() {

        try {

            $stmt = $this->conn->prepare("INSERT INTO PRODUCTO(descrip, precio, grupo, familia, idHeredado) VALUES (:descrip, :precio, :grupo, :familia, :idHeredado)");
            $stmt->bindParam(':idHeredado', $this->getIdHeredado());
            $stmt->bindParam(':descrip', $this->getDescrip());
            $stmt->bindParam(':familia', $this->getFamilia());
            $stmt->bindParam(':grupo', $this->getGrupo());
            $stmt->bindParam(':precio', $this->getPrecio());

            $stmt->execute();

            $respuesta['estado'] = "1";
            $respuesta['mensajelog'] = "Consulta Exitosa (insert)";
            $respuesta['mensaje'] = "Se ha insertado el resgistro con exito";
            return $respuesta;
        } catch (PDOException $e) {

            $respuesta['estado'] = "0";
            $respuesta['mensajelog'] = $e->getMessage();
            $respuesta['mensaje'] = "Ha ocurrido un error.";
            return $respuesta;
        }
    }

     public function getById() {
        try {
            $stmt = $this->conn->prepare("SELECT id,idHeredado,descrip, precio, grupo, familia FROM PRODUCTO where id = :id");
            $stmt2 = $this->conn->prepare("SELECT COUNT(*) id  FROM PRODUCTO where id = :id");
            $stmt->bindParam(':id', $this->getId());
            $stmt2->bindParam(':id', $this->getId());

            $stmt2->execute();
            $cant = $stmt2->fetchColumn();
            if ($cant > 0) {
                $stmt->execute();
                $respuesta['estado'] = "1";
                $respuesta['mensajelog'] = "Consulta Exitosa (getById)";
                $respuesta['mensaje'] = "Consulta Exitosa.";
                $respuesta['cantidad'] = $cant;
                $respuesta['resultados'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $respuesta;
            } else {
                $respuesta['estado'] = "2";
                $respuesta['mensajelog'] = "Consulta Exitosa (getById'sin retorno'";
                $respuesta['mensaje'] = "No se encontro GRUPO con Id asociado.";
                return $respuesta;
            }
        } catch (PDOException $e) {

            $respuesta['estado'] = "0";
            $respuesta['mensajelog'] = $e->getMessage();
            $respuesta['mensaje'] = "Ha ocurrido un error.";
            return $respuesta;
        }
    }
    
    public function getByIdHeredado() {

        try {
            $stmt = $this->conn->prepare("SELECT id, idHeredado, descrip, precio, grupo, familia FROM PRODUCTO where idHeredado = :idHeredado");
            $stmt2 = $this->conn->prepare("SELECT COUNT(*) id, idHeredado FROM PRODUCTO where idHeredado = :idHeredado");
            $stmt->bindParam(':idHeredado', $this->getIdHeredado());
            $stmt2->bindParam(':idHeredado', $this->getIdHeredado());

            $stmt2->execute();
            $cant = $stmt2->fetchColumn();
            if ($cant > 0) {
                $stmt->execute();
                $respuesta['estado'] = "1";
                $respuesta['mensajelog'] = "Consulta Exitosa (getByIdHeredado)";
                $respuesta['mensaje'] = "Consulta Exitosa.";
                $respuesta['cantidad'] = $cant;
                $respuesta['resultados'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $respuesta;
            } else {
                $respuesta['estado'] = "2";
                $respuesta['mensajelog'] = "Consulta Exitosa (getByIdHeredado)'sin retorno'";
                $respuesta['mensaje'] = "No se encontro GRUPO con Id asociado.";
                return $respuesta;
            }
        } catch (PDOException $e) {

            $respuesta['estado'] = "0";
            $respuesta['mensajelog'] = $e->getMessage();
            $respuesta['mensaje'] = "Ha ocurrido un error.";
            return $respuesta;
        }
    }
    
    public function getAll() {
        try {
            $stmt = $this->conn->prepare("SELECT id, idHeredado, descrip, precio, grupo, familia FROM PRODUCTO");
            $stmt2 = $this->conn->prepare("SELECT COUNT(*) id, idHeredado FROM PRODUCTO");

            $stmt2->execute();
            $cant = $stmt2->fetchColumn();
            if ($cant > 0) {
                $stmt->execute();
                $respuesta['estado'] = "1";
                $respuesta['mensajelog'] = "Consulta Exitosa (getAll)";
                $respuesta['mensaje'] = "Consulta Exitosa.";
                $respuesta['cantidad'] = $cant;
                $respuesta['resultados'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $respuesta;
            } else {
                $respuesta['estado'] = "2";
                $respuesta['mensajelog'] = "Consulta Exitosa (getALL'sin retorno'";
                $respuesta['mensaje'] = "No hay datos.";
                return $respuesta;
            }
            
        } catch (PDOException $e) {

            $respuesta['estado'] = "0";
            $respuesta['mensajelog'] = $e->getMessage();
            $respuesta['mensaje'] = "Ha ocurrido un error.";
            return $respuesta;
        }
    }
}

?>