<?php

include './connect.php';


$conexion = new Connect();
$conn = $conexion->conect();
@$ini= $_POST["ini"];
@$fin= $_POST["fin"];

$parametros = array(
    'URL' => 'ws/familiagetAll.php',
    'metodo' => 'POST',
    'ini' => $ini,
    'fin' => $fin);
$respuesta['parametros'] = $parametros;

if (isset($ini) || isset($fin)) {
    if (empty($fin)) {
        
        $respuesta['estado'] = "4";
        $respuesta['mensajelog'] = "Variable  definida pero vacìa (EMPTY ERROR)";
        $respuesta['mensaje'] = "Faltan valores.";
        
    } else {
        try {
            
            $stmt = $conn->prepare("CALL FAMILIAgetAll(:ini,:fin)");
            $stmt->bindParam(':ini', $ini);
            $stmt->bindParam(':fin', $fin);
            $stmt->execute();
            $respuesta['estado'] = "1";
            $respuesta['mensajelog'] = "Consulta Exitosa (getAll)";
            $respuesta['mensaje'] = "Se obtuvieron los resgistros con exito";
             $respuesta['resultados'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            
            $respuesta['estado'] = "0";
            $respuesta['mensajelog'] = $e->getMessage();
            $respuesta['mensaje'] = "Ha ocurrido un error.";
        }
    }
} else {
    
    $respuesta['estado'] = "3";
    $respuesta['mensajelog'] = "Variable  no definida (NULL ERROR)";
    $respuesta['mensaje'] = "Faltan valores.";
}
print json_encode($respuesta);
?>