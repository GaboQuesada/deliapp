<?php
session_start();
include '../../bd/connect.php';
$conn = dbConnect();

try {
    $stmt = $conn->prepare("CALL usuarioPassCheck(:us,:ps)");
    $stmt->bindParam(':us', $_POST["us"]);
    $stmt->bindParam(':ps', $_POST["ps"]);
    $stmt->execute();
    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Consulta Exitosa (getAll)";
    $respuesta['mensaje'] = "Consulta Exitosa.";
    $respuesta['resultados'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo $respuesta['resultados']['us'];
   // print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
   // print json_encode($respuesta);
}
    

