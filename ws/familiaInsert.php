<?php

include './connect.php';

$conexion = new Connect();
$conn = $conexion->conect();


 $parametros = array(
        'URL' => 'ws/familiaInsert.php',
        'metodo' => 'POST',
        'idHeredado' => $_POST['idHeredado'],
        'familiaNombre' => $_POST['familiaNombre']);

    $respuesta['parametros'] = $parametros;


if (isset($_POST['idHeredado']) || isset($_POST['familiaNombre'])) {
    if (empty($_POST['idHeredado']) || empty($_POST['familiaNombre'])) {
        $respuesta['estado'] = "4";
        $respuesta['mensajelog'] = "Variable  definida pero vacìa (EMPTY ERROR)";
        $respuesta['mensaje'] = "Faltan valores.";
      
    } else {
        try {

            $stmt = $conn->prepare("INSERT INTO FAMILIA (idHeredado, familiaNombre)VALUES (:idHeredado,:familiaNombre)");
            $stmt->bindParam(':idHeredado', $_POST['idHeredado']);
            $stmt->bindParam(':familiaNombre', $_POST['familiaNombre']);

            $stmt->execute();

            $respuesta['estado'] = "1";
            $respuesta['mensajelog'] = "Consulta Exitosa (insert)";
            $respuesta['mensaje'] = "Se ha insertado el resgistro con exito";
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