
<?php

session_start();

unset($_SESSION['usertoaddid']);
unset($_SESSION['usertoaddname']);

include '../../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {


    date_default_timezone_set('America/Costa_Rica');
    $fei =  date("Y-m-d ");
    $nullimg= "user.png";

    $stmt = $conn->prepare("CALL USUARIOSinsert(:id,:us,:pa,:fe, :im, :ro )");
    $stmt->bindParam(':id', $_POST['idup']);
    $stmt->bindParam(':us', $_POST['pnus']);
    $stmt->bindParam(':pa', $_POST['pnupa']);
    $stmt->bindParam(':fe', $fei);
    if($_FILES['pimu']["name"] == ""){
        $stmt->bindParam(':im',$nullimg);
    }else{
        $stmt->bindParam(':im', $_FILES['pimu']["name"]);
    }
    $stmt->bindParam(':ro', $_POST['rolid']);




    $sourcePath = $_FILES['pimu']['tmp_name'];
    $targetPath = "../../compSesion/userImg/" . $_FILES['pimu']["name"];
    move_uploaded_file($sourcePath, $targetPath);



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
?>