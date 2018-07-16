<?php

session_start();

include '../../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {
    $stmt = $conn->prepare("CALL USUARIOSlogin(:us , :pa)");
    $stmt->bindParam(':us' , $_POST['us']);
    $stmt->bindParam(':pa' , $_POST['pa']);
    $stmt->execute();
    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Consulta Exitosa (getAll)";
    $respuesta['mensaje'] = "Consulta Exitosa.";
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $respuesta['resultados'] = $user;
    
    $usuarioid    =     $user['usr_id']; 
    $usuario      =     $user['usr_us'];
    $usuarioIMG   =     $user['usr_im']; 
    $nombre       =     $user['pla_no']." ".$user['pla_ap1']." ".$user['pla_ap2'];
    $rolid        =     $user['rol_id'];
    $ronombre     =     $user['rol_no'];
    $departamento =     $user['dep_no'];
    $cargo        =     $user['car_no'];
    
  
    $_SESSION["usuarioid"] = $usuarioid;
    $_SESSION["usuario"] = $usuario;
    $_SESSION["usuarioIMG"] = $usuarioIMG;
    $_SESSION["nombre"] = $nombre;
    $_SESSION["rolid"] = $rolid;
    $_SESSION["ronombre"] = $ronombre;
    $_SESSION["departamento"] = $departamento;
    $_SESSION["cargo"] = $cargo;
    
    
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
     print json_encode($respuesta);
}
    