<?php

include '../../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {
    $stmt = $conn->prepare("CALL ROLESifExist(:no)");
    $stmt->bindParam(':no', $_POST["no"]);
    $stmt->execute();
    $can = $stmt->fetchColumn();
    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "su";
    $respuesta['mensaje'] = "Consulta Exitosa.";
    $respuesta['resultados'] = $can;
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
    print json_encode($respuesta);
}
    
