
<?php

include '../../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();


try {


    $stmt = $conn->prepare("CALL LOCALIDADESinsert(:nb ,:ce , :tl , :de, :im, :dir, :web , :co , :fa , :tel )");
    $stmt->bindParam(':nb', $_POST['pnb']);
    $stmt->bindParam(':im', $_FILES['pim']["name"]);
    $stmt->bindParam(':de', $_POST['pde']);
    $stmt->bindParam(':tl', $_POST['ptl']);
    $stmt->bindParam(':web', $_POST['pweb']);
    $stmt->bindParam(':tel', $_POST['ptel']);
    $stmt->bindParam(':dir', $_POST['pdir']);
    $stmt->bindParam(':co', $_POST['pco']);
    $stmt->bindParam(':fa', $_POST['pfa']);
    $stmt->bindParam(':ce', $_POST['pce']);



    $sourcePath = $_FILES['pim']['tmp_name'];; // Storing source path of the file in a variable
    $targetPath = "../logoslocal/" . $_FILES['pim']["name"]; // Target path where file is to be stored
    move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file



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

