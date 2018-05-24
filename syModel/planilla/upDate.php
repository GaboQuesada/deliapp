<?php

include '../../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {

    $stmt = $conn->prepare("CALL PLANILLAupDate(:no,:ap1,:ap2, :fn, :ca, :de, :ce)");
    $stmt->bindParam(':no', $_POST['no']);
    $stmt->bindParam(':ap1', $_POST['ap1']);
    $stmt->bindParam(':ap2', $_POST['ap2']);
    $stmt->bindParam(':fn', $_POST['fn']);
    $stmt->bindParam(':ca', $_POST['ca']);
    $stmt->bindParam(':de', $_POST['de']);
    $stmt->bindParam(':ce', $_POST['ce']);

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