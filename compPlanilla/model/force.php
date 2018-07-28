<?php
include '../../bd/connect.php';

$contador = 0;

while($contador < 15){
    
    $contador++;
    
    $conexion = new Connect();
$conn = $conexion->conect();

        try {
            $stmt = $conn->prepare("CALL DEPARTAMENTOSgetAll();");

           
                $stmt->execute();
                $respuesta['estado'] = "1";
                $respuesta['mensajelog'] = "Consulta Exitosa (getAll)";
                $respuesta['mensaje'] = "Consulta Exitosa.";
                $respuesta['resultados'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                print json_encode($respuesta);
                
                echo "<br> $contador  <hr>";
            
            
        } catch (PDOException $e) {

            $respuesta['estado'] = "0";
            $respuesta['mensajelog'] = $e->getMessage();
            $respuesta['mensaje'] = "Ha ocurrido un error.";
             print json_encode($respuesta);
        }
    
}


    
    ?>