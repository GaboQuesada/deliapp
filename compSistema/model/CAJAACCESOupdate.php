<?php

include '../../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {

    $stmt = $conn->prepare("CALL CAJAACCESOupdate(:id ,:di ,:df ,:hi ,:hf )");
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->bindParam(':di', $_POST['di']);
    $stmt->bindParam(':df', $_POST['df']);
    $stmt->bindParam(':hi', $_POST['hi']);
    $stmt->bindParam(':hf', $_POST['hf']);

    $stmt->execute();

    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Consulta Exitosa (insert)";
    $respuesta['mensaje'] = "Se ha insertado el resgistro con exito";
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
    print json_encode($respuesta);
}
?>