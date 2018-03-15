<?php

include './connect.php';

class Pedido {

    private $id;
    private $estado = 'A';
    private $cantidad;
    private $mesaId;
    private $productoId;
    private $mesa;
    private $producto;

    function __construct() {
        $conexion = new Connect();
        $this->conn = $conexion->conect();
    }

    function getMesa() {
        return $this->mesa;
    }

    function getMesaId() {
        return $this->mesaId;
    }

    function getProductoId() {
        return $this->productoId;
    }

    function setMesaId($mesaId) {
        $this->mesaId = $mesaId;
    }

    function setProductoId($productoId) {
        $this->productoId = $productoId;
    }

    function getProducto() {
        return $this->producto;
    }

    function setMesa($mesa) {
        $this->mesa = $mesa;
    }

    function setProducto($producto) {
        $this->producto = $producto;
    }

    function getId() {
        return $this->id;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function insert() {

        try {

            $stmt = $this->conn->prepare("INSERT INTO PEDIDO(mesaId, productoId, cantidad, estado  ) VALUES ( :mesaId, :productoId, :cantidad, :estado)");
            $stmt->bindParam(':mesaId', $this->getMesaId());
            $stmt->bindParam(':productoId', $this->getProductoId());
            $stmt->bindParam(':cantidad', $this->getCantidad());
            $stmt->bindParam(':estado', $this->getEstado());


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

    public function getByMesaId() {

        try {

            $stmt = $this->conn->prepare("SELECT  productoId, cantidad  FROM PEDIDO WHERE mesaId = :mesaId AND estado = :estado");
            $stmt2 = $this->conn->prepare("SELECT COUNT(*)  productoId FROM PEDIDO WHERE mesaId = :mesaId AND estado = :estado");
           $stmt->bindParam(':estado',$this->getEstado());
            $stmt->bindParam(':mesaId', $this->getId());
           $stmt2->bindParam(':estado',$this->getEstado());
            $stmt2->bindParam(':mesaId', $this->getId());

            $stmt2->execute();
            $cant = $stmt2->fetchColumn();

            if ($cant > 0) {
                $stmt->execute();

                $respuesta['estado'] = "1";
                $respuesta['mensajelog'] = "Consulta Exitosa ";
                $respuesta['mensaje'] = "Se ha insertado el resgistro con exito";
                $respuesta['cantidad'] = $cant;
                $respuesta['resultados'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $respuesta;
            } else {
                $respuesta['estado'] = "2";
                $respuesta['mensajelog'] = "Consulta Exitosa (sin retorno)";
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
}

?>