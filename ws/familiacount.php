<?php
include './settings.php';
include './connect.php';

$jsondata = file_get_contents('../config/config.json');
$data = json_decode($jsondata, true);


$conexion = new Connect($data);
$conn = $conexion->conect();
 
        try {
            $stmt = $conn->prepare("CALL FAMILIAcount()");
           
        
                $stmt->execute();
                $can=$stmt->fetchColumn();
                $respuesta['estado'] = "1";
                $respuesta['mensajelog'] = "Consulta Exitosa (getAll)";
                $respuesta['mensaje'] = "Consulta Exitosa.";
                $respuesta['resultados'] = $can;
                print json_encode($respuesta);
            
            
        } catch (PDOException $e) {
            $respuesta['estado'] = "0";
            $respuesta['mensajelog'] = $e->getMessage();
            $respuesta['mensaje'] = "Ha ocurrido un error.";
             print json_encode($respuesta);
        }
    
    ?>