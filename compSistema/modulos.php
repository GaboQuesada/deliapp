<?php
@session_start();

if (!empty($_SESSION["usuarioid"]) && $_SESSION["Modulos"] == 1) {
    
} else {
    header("Location: ../comps/nomodule.php");
}
?>

<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <?php include '../comps/compscss.php'; ?>
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rasa" rel="stylesheet">


        <link rel="stylesheet" href="css/modulos.css" >


        <title>Modulos</title>
    </head>
    <body>
        <a id="iraAncla" href="#ancla"></a>
        <input type="hidden" id="tocompare">
        <?php include '../comps/ShowInfo.php'; ?>
        <?php include '../comps/navsuperior.php'; ?>


        <div>
            <div class="caja1 " id="caja1">
                <?php include '../comps/navlateral.php'; ?>
            </div>
            <div class="caja2" id="caja2">
                <div class="navbarlateral">
                    <?php include '../comps/navlateralbar.php'; ?>
                </div>

                <div id="masterbox">
                    <div id="boxcontrol" class="container">
                        <div class="col-lg-12 ">


                            <div>
                                <div>
                                    <img style="display: inline-block" src="../img/logo.png" width="40" height="40">
                                    &numsp;
                                    <p style="display: inline-block; font-size: 18px; font-family: 'Permanent Marker',  cursive;"> Deliapp tiene muchas cosas para ti!</p>
                                </div>
                                <p style="display: inline-block; font-size: 16px; font-family: 'Rasa', serif;">Siempre estamos trabajando en nuevas cosas, puede
                                    ser que te llegue una notificacion de una mejora en un modulo ya contratado , o que este a tu dispocion una nueva modalidad para agregar.</p>
                            </div>

                            <div>
                                <div class="boxmall">
                                    <div class=" headermbox"><p>Modulos disponibles:</p><hr></div>



                                    <?php
                                    try {
                                        $stmt = $conn->prepare("CALL MODULOSgetAll();");

                                        $stmt->execute();
                                        $respuesta = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        $tam = count($respuesta);

                                        for ($i = 0; $i < $tam; $i++) {
                                            ?>




                                            <div class="boxmitem border p-1">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-2" >
                                                            <?php if ($respuesta[$i]['ses_et'] == 'ct') { ?> 
                                                                <i  class="mr-3 mt-3 rounded-circle material-icons " style="width:60px; padding-top: 4%; padding-left: 5px;  font-size: 45px;"><?php echo $respuesta[$i]['ses_im']; ?></i>  <?php } else { ?>
                                                                <i  class="mr-3 mt-3 rounded-circle material-icons pulse" style="width:60px; color:olivedrab; padding-top: 4%;  font-size: 45px;"><?php echo $respuesta[$i]['ses_im']; ?></i>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-9">
                                                            <div> <h6><strong><?php echo $respuesta[$i]['ses_no']; ?></strong></h6></div>
                                                            <div><?php if ($respuesta[$i]['ses_et'] == 'ct') { ?> <p>Contratado</p> <?php } else { ?> <p class="pulse">Disponible</p> <?php } ?></div>
                                                            <div>

                                                                <?php if ($respuesta[$i]['ses_et'] == 'ct') { ?>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-sm">
                                                                                <button onclick="showinf('<?php echo $respuesta[$i]['ses_no']; ?>', '<?php echo $respuesta[$i]['ses_de']; ?>')" type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModalLong">Descripcion</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                } else {
                                                                    ?> 

                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-5">
                                                                                <button  onclick="showinf('<?php echo $respuesta[$i]['ses_no']; ?>',<?php echo $respuesta[$i]['ses_de']; ?>)"  type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModalLong">Descripcion</button>
                                                                            </div>
                                                                            <div class="col-5">
                                                                                <button  type="button" class="btn btn-secondary btn-sm">Contratar</button>
                                                                            </div>

                                                                        </div>
                                                                    </div>


                                                                <?php } ?>
                                                            </div>
                                                        </div>

                                                    </div>
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
        </div>


        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label><strong>Descripción del modulo:</strong></label>
                        <p id="modes"></p>
                        <label><strong>Sub Modulos:</strong></label>
                        <ul id="listsubmodulos" class="list-group" style="text-decoration:none; list-style:none;">

                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Listo!</button>

                    </div>
                </div>
            </div>
        </div>


        <?php include '../comps/compsjs.php'; ?>

        <script src="controler/MODULOSGetAll.js" ></script>
        <script src="js/Rolessize.js"></script>
        <script src="js/Modulossize.js"></script>




    </body>
</html>



