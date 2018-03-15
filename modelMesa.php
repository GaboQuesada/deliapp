<?php

include './connect.php';

class Mesa {

    private $id;
    private $idHeredado;

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

    function setId($id) {
        $this->id = $id;
    }

    function setIdHeredado($idHeredado) {
        $this->idHeredado = $idHeredado;
    }

    public function insert() {

        try {

            $stmt = $this->conn->prepare("INSERT INTO MESA (idHeredado)VALUES (:idHeredado)");
            $stmt->bindParam(':idHeredado', $this->getIdHeredado());

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
            $stmt = $this->conn->prepare("SELECT id,idHeredado FROM MESA where id = :id");
            $stmt2 = $this->conn->prepare("SELECT COUNT(*) id,idHeredado FROM MESA where id = :id");
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
                $respuesta['mensaje'] = "No se encontro Mesa con Id asociado.";
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
            $stmt = $this->conn->prepare("SELECT id,idHeredado FROM MESA where idHeredado = :idHeredado");
            $stmt2 = $this->conn->prepare("SELECT COUNT(*) id,idHeredado FROM MESA where idHeredado = :idHeredado");
            $stmt->bindParam(':idHeredado', $this->getByIdHeredado());
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
                $respuesta['mensaje'] = "No se encontro Mesa con Id asociado.";
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
            $stmt = $this->conn->prepare("SELECT id,idHeredado FROM MESA");
            $stmt2 = $this->conn->prepare("SELECT COUNT(*) id,idHeredado FROM MESA");

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
            //
        } catch (PDOException $e) {

            $respuesta['estado'] = "0";
            $respuesta['mensajelog'] = $e->getMessage();
            $respuesta['mensaje'] = "Ha ocurrido un error.";
            return $respuesta;
        }
    }

   

}
