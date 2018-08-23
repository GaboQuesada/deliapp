<?php



    include '../../bd/connect.php';
    $conexion = new Connect();
    $conn = $conexion->conect();

    try {


        $stmt = $conn->prepare("CALL CAJAACCESOinsert(:ca,:us,:di, :df, :hi, :hf )");
        $stmt->bindParam(':ca', $_POST['cjid']);
        $stmt->bindParam(':us', $_POST['userSearchh']);
        $stmt->bindParam(':di', $_POST['pcdi']);
        $stmt->bindParam(':df', $_POST['pcdf']);
        $stmt->bindParam(':hi', $_POST['pchi']);
        $stmt->bindParam(':hf', $_POST['pchf']);



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
