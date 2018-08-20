
<?php

include '../../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {


    $stmt = $conn->prepare("CALL LOCALIDADESinsert(:id,:us,:pa, :es, :fe, :im, :ro )");
   $stmt->bindParam(':id' , $_POST['idup']);
$stmt->bindParam(':us' , $_POST['pnus']);
$stmt->bindParam(':pa' , $_POST['pnupa']);
$stmt->bindParam(':es' ,'1');
$stmt->bindParam(':fe' , $_POST['fe']);
$stmt->bindParam(':im' , $_POST['im']);
$stmt->bindParam(':ro' , $_POST['ro']);




    $sourcePath = $_FILES['pim']['tmp_name'];
    $targetPath = "../logoslocal/" . $_FILES['pim']["name"]; 
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