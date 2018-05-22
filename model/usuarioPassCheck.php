<?php

session_start();
include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {
    $stmt = $conn->prepare("CALL usuarioPassCheck(:ps,:usr)");
    $stmt->bindParam(':usr', $_POST["us"]);
    $stmt->bindParam(':ps', $_POST["ps"]);
    $stmt->execute();
    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Consulta Exitosa (getAll)";
    $respuesta['mensaje'] = "Consulta Exitosa.";
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $respuesta['resultados'] = $user;
    $id = $user['id'];
    $nombre = $user['user'];
    $_SESSION["id"] = $id;
    $_SESSION["nb"] = $nombre;
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
     print json_encode($respuesta);
}
    

