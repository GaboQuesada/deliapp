<?php

include './connect.php';
$conexion = new Connect();
$this->conn = $conexion->conect();

@$familia= $_POST['familiaNombre'];
@$id = $Post['idHeredado'];

if (empty($familia) || empty($familia)){
    
}else{
    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = "Null exeption";
    $respuesta['mensaje'] = "Campos obligatorios :|";
    return $respuesta;
}
try {

    $stmt = $this->conn->prepare("CALL FAMILIAinsert(:pfamiliaNombre,:pidHeredado)");
    $stmt->bindParam(':pfamiliaNombre', $this->getIdHeredado());
    $stmt->bindParam(':pidHeredado', $this->getFamiliaNombre());

    $stmt->execute();

    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Consulta Exitosa (insert)";
    $respuesta['mensaje'] = "Se ha insertado la familia con exito :)";
    return $respuesta;
} catch (PDOException $e) {

    $respuesta['estado'] = "2";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error :(";
    return $respuesta;
}
?>