<?php
include './connect.php';

$conexion = new Connect();
$conn = $conexion->conect();

try {
            
            $stmt = $conn->prepare("CALL FAMILIAdeleted()");
            $stmt->execute();
            $respuesta['estado'] = "1";
            $respuesta['mensajelog'] = "Consulta Exitosa (deleted)";
            $respuesta['mensaje'] = "La tabla ha sido Eliminada";
            
        } catch (PDOException $e) {
            
            $respuesta['estado'] = "0";
            $respuesta['mensajelog'] = $e->getMessage();
            $respuesta['mensaje'] = "Ha ocurrido un error.";
        }