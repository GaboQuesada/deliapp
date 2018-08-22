<?php

@session_start();


if (!empty($_SESSION["usuarioid"]) && $_SESSION["Usuarios"] == 1) {

    $id = $_POST['midk'];
    $rol = $_POST['mrolidmd'];
    $img = $_FILES['mpimu']["name"];
    $aimg = $_POST['mimgk'];
    $arol = $_POST['mrolk'];

    include '../../bd/connect.php';
    $conexion = new Connect();
    $conn = $conexion->conect();

    try {

        $stmt = $conn->prepare("CALL USUARIOSupDate(:img ,:rol ,:id )");
        $stmt->bindParam(':id', $id);

        if ($rol == "0") {
            $stmt->bindParam(':rol', $arol);
        } else {
            $stmt->bindParam(':rol', $rol);
        }

        if ($img == NULL) {
            $stmt->bindParam(':img', $aimg);
        } else {
            $stmt->bindParam(':img', $img);
            $sourcePath = $_FILES['mpimu']['tmp_name'];
            $targetPath = "../../compSesion/userImg/" . $_FILES['mpimu']["name"];
            move_uploaded_file($sourcePath, $targetPath);
        }

        $stmt->execute();

        $respuesta['estado'] = "1";
        $respuesta['mensajelog'] = "Consulta Exitosa (insert)";
        $respuesta['mensaje'] = "Se ha insertado el resgistro con exito";
        header('Content-type: application/json; charset=utf-8');
        print json_encode($respuesta);
    } catch (PDOException $e) {

        $respuesta['estado'] = "0";
        $respuesta['mensajelog'] = $e->getMessage();
        $respuesta['mensaje'] = "Ha ocurrido un error.";
        header('Content-type: application/json; charset=utf-8');
        print json_encode($respuesta);
    }
} else {
    header("Location: ../comps/nomodule.php");
}
?>