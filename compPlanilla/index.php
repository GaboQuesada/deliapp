<?php
@session_start();
include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

if (!empty($_SESSION["usuarioid"])) {
    
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="../lib/animation/css/animation.css" >
        <link rel="stylesheet" href="css/index.css" >


        <title>Hello, world!</title>
    </head>
    <body>

        <div class="container" style="padding-top:25px; padding-bottom: 25px;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <img src="../img/logo.png" width="30" height="30" class="" alt="">
                &numsp;
                <strong>Deliapp</strong>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">


                      
                        <li class="nav-item active">
                            <a class="nav-link" href="../compSessiones/lobby.php"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-envelope notifybox"></i><span class="badge badge-info"> 0</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-comment-alt notifybox"></i><span class="badge badge-info"> 0</span></a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <img src="../compSession/userImg/<?php echo $_SESSION["usuarioIMG"] ?>" width="35" height="35" class="rounded" alt="">
                        &numsp;
                        <span> Gabriel Quesada Sanchez</span>
                        <a class="nav-item nav-link" href="Perfil.php"><i class="fas fa-cog"></i></a>
                        <a class="nav-item nav-link " href="modelGeneral/salir.php"><i class="fas fa-sign-out-alt"></i></a>

                    </form>
                </div>
            </nav>
        </div>


        <div class="container" >

            <?php
            try {
                $stmt = $conn->prepare("CALL ACCESOSGetRutas(:rol, :modu);");
                $stmt->bindParam(':rol', $_SESSION["rolid"]);
                $modulo = "Planilla";
                $stmt->bindParam(':modu', $modulo);
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




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../lib/animation/js/animation.js" ></script>

    </body>
</html>