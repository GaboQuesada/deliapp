<?php
@session_start();
include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

if (!empty($_SESSION["usuarioid"])) {
    $_SESSION["modu"]= "Sistema";
} else {
    header("Location: ../index.php");
}
?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
       <?php include '../comps/compscss.php'; ?>
        <link rel="stylesheet" href="css/index.css" >


        <title>Hello, world!</title>
    </head>
    <body>

        <div class="container" style="padding-top:25px; padding-bottom: 25px;">
            <?php include_once '../comps/navcomp.php';?>
        </div>


        <div class="container" >

            <?php
            try {
                $stmt = $conn->prepare("CALL ACCESOSGetRutas(:rol, :modu);");
                $stmt->bindParam(':rol', $_SESSION["rolid"]);  
                $stmt->bindParam(':modu',$_SESSION["modu"]);
                $stmt->execute();
                $respuesta = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $tam = count($respuesta);

                for ($i = 0; $i < $tam; $i++) {
                    
                   
                    $nomse= $respuesta[$i]['sbm_no'];
                    $_SESSION[$nomse] = 1;
                    ?>
                    <div class="boxmenu card">
                        <div class="card-body ">
                            <a class="linkm" href="<?php echo $respuesta[$i]['sbm_ur']; ?>">
                                <div class="col-sm align-self-center">
                                    <div class="row justify-content-center">
                                        <div>
                                            <div class="col-sm align-self-center"> <img src="iconos/<?php echo $respuesta[$i]['sbm_im']; ?>"></div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div>
                                            <div class="col-sm align-self-center"> <p><?php echo $respuesta[$i]['sbm_no']; ?></p></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php
                }
            } catch (PDOException $e) {


                $respuesta['mensajelog'] = $e->getMessage();

                print json_encode($respuesta);
            }
            ?>




        </div>




       <?php include '../comps/compsjs.php'; ?>

    </body>
</html>