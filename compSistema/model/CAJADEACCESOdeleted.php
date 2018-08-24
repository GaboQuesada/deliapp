<?php
include '../../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

        try {
         
            $stmt = $conn->prepare("CALL ACCESOSdelete(:psm,:pro)");
            $stmt->bindParam(':psm',$_POST['sm']);
          

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