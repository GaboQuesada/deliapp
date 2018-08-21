<?php

@session_start();


if (!empty($_SESSION["usuarioid"]) && $_SESSION["Usuarios"] == 1) {


    $ids = $_POST['iduss'];
    $op = $_POST['nbuss'];


    include '../../bd/connect.php';
    $conexion = new Connect();
    $conn = $conexion->conect();

    if ($op == "Desabilitar") {
        try {

            $stmt = $conn->prepare("CALL USUARIOSestadoH(:id)");
            $stmt->bindParam(':id', $ids);


            $stmt->execute();
            header("Location: ../usuarios.php");
        } catch (PDOException $e) {

            $respuesta['estado'] = "0";
            $respuesta['mensajelog'] = $e->getMessage();
            $respuesta['mensaje'] = "Ha ocurrido un error.";
            print json_encode($respuesta);
        }
    } else {
        try {

            $stmt = $conn->prepare("CALL USUARIOSestadoA(:id)");
            $stmt->bindParam(':id', $ids);


            $stmt->execute();
            header("Location: ../usuarios.php");
        } catch (PDOException $e) {

            $respuesta['estado'] = "0";
            $respuesta['mensajelog'] = $e->getMessage();
            $respuesta['mensaje'] = "Ha ocurrido un error.";
            print json_encode($respuesta);
        }
    }
} else {
    header("Location: ../comps/nomodule.php");
}
?>