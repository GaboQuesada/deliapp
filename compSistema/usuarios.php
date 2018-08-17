<?php
@session_start();

$_SESSION["Agregar a Planilla"] = 1;
$_SESSION["agru"] = 1;

if (!empty($_SESSION["usuarioid"]) && $_SESSION["Usuarios"] == 1) {
    
} else {
    header("Location: ../comps/nomodule.php");
}
?>

<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="../lib/animation/css/animation.css" >
        <link rel="stylesheet" href="../lib/alertifyjs/css/alertify.css" >
        <link rel="stylesheet" href="../lib/alertifyjs/css/themes/semantic.min.css" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/menusuperior.css" >
        <link rel="stylesheet" href="css/boxmodel.css" >
        <link rel="stylesheet" href="css/boxcuerpo.css" >
        <link rel="stylesheet" href="css/menuseccion.css" >
        <link rel="shortcut icon" href="../img/favicon.ico">
        <link rel="stylesheet" href="css/showinfo.css" >

        <title>Localidades</title>
    </head>
    <body>
        <a id="iraAncla" href="#ancla"></a>
        <input type="hidden" id="tocompare">
        <?php include_once './ShowInfo.php'; ?>
        <?php include './navsuperior.php'; ?>


        <div class="contenedorcentral" id="contenedorcentral" style="margin-bottom: 25px;">
            <div class="caja1 " id="caja1">
                <?php include './navlateral.php'; ?>
            </div>
            <div class="caja2" id="caja2" style="margin-bottom:30px; padding-bottom: 30px;">
                <div id="cuerpobox" class="container-fluid"  style="margin-bottom:30px; padding-bottom: 30px;">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">


                                        
                                        <h6>Nuevo usuario</h6>
                                        <hr>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nombre Colaborador" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <form method="post" action="../compPlanilla/personal.php" >
                                                <input class="btn btn-outline-secondary" type="submit" value="Planilla"/>
                                                </form>

                                            </div>
                                        </div>
                             <form enctype="multipart/form-data" method="post" name="newcashbox" id="newcashbox">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Role</label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <?php
                                                try {
                                                    $stmt = $conn->prepare("CALL ROLESgetAll();");

                                                    $stmt->execute();
                                                    $respuesta = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                    $tam = count($respuesta);

                                                    for ($i = 0; $i < $tam; $i++) {
                                                        ?>
                                                        <option value="<?php echo $respuesta[$i]['rol_id']; ?>"><?php echo $respuesta[$i]['rol_no']; ?> - <?php echo $respuesta[$i]['rol_de']; ?> </option>

                                                        <?php
                                                    }
                                                } catch (PDOException $e) {


                                                    $respuesta['mensajelog'] = $e->getMessage();

                                                    print json_encode($respuesta);
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="disabledTextInput">Foto perfil</label>
                                            <input type="file" id="pnb" name="pnb" class="form-control" >
                                        </div>

                                        <div class="form-group">

                                            <input type="text" id="pnb" name="pnb" class="form-control" placeholder="Usuario" >
                                        </div>

                                        <div class="form-group">

                                            <input type="text" id="pnb" name="pnb" class="form-control" placeholder="Contraseña" >
                                        </div>


                                        <button type="submit" class="btn btn-primary btn-block">Agregar</button>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <?php
                                try {
                                    $stmt = $conn->prepare("CALL USUARIOSgetAll;");

                                    $stmt->execute();
                                    $respuesta = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    $tam = count($respuesta);

                                    for ($i = 0; $i < $tam; $i++) {
                                        ?>



                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="../compSesion/userImg/adri.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h6 class="card-title"><strong><?php echo $respuesta[$i]['pla_no']; ?>&numsp;
                                                        <?php echo $respuesta[$i]['pla_ap1']; ?>&numsp;
                                                        <?php echo $respuesta[$i]['pla_ap2']; ?></strong></h6>
                                                <div>
                                                    <img style="display: inline-block" src="../compPlanilla/iconos/pla_Departamento.png" width="30" height="30"/>
                                                    <p style="display: inline-block"><?php echo $respuesta[$i]['dep_no']; ?></p>
                                                </div>
                                                <div>
                                                    <img style="display: inline-block" src="../compPlanilla/iconos/pla_Actividad.png" width="30" height="30"/>
                                                    <p style="display: inline-block"><?php echo $respuesta[$i]['car_no']; ?></p>
                                                </div>
                                                <div>
                                                    <img style="display: inline-block" src="../compSistema/iconos/sis_Role.png" width="30" height="30"/>
                                                    <p style="display: inline-block"><?php echo $respuesta[$i]['rol_no']; ?></p>
                                                </div>
                                                <div>
                                                    <img style="display: inline-block" src="../compSistema/iconos/sis_Usuario.png" width="30" height="30"/>
                                                    <p style="display: inline-block"><?php echo $respuesta[$i]['usr_us']; ?></p>
                                                </div>
                                                <center><a href="#" class="btn btn-primary">Desabilitar</a></center>
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

                        </div>
                    </div>

                </div>
            </div>
        </div>



        <script src="../lib/jquery/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../lib/animation/js/animation.js" ></script>
        <script src="../lib/alertifyjs/js/alertify.js" ></script>
        <script src="controler/cajasInsert.js" ></script>
        <script src="js/showinfo.js" ></script>


    </body>
</html>
