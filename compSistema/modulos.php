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


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rasa" rel="stylesheet">
        <link rel="stylesheet" href="../lib/animation/css/animation.css" >
        <link rel="stylesheet" href="../lib/alertifyjs/css/alertify.css" >
        <link rel="stylesheet" href="../lib/alertifyjs/css/themes/semantic.min.css" >
        <link rel="stylesheet" href="css/menusuperior.css" >
        <link rel="stylesheet" href="css/boxmodel.css" >
        <link rel="stylesheet" href="css/boxcuerpo.css" >
        <link rel="stylesheet" href="css/menuseccion.css" >
        <link rel="stylesheet" href="css/modulos.css" >
        <link rel="shortcut icon" href="../img/favicon.ico">
        <link rel="stylesheet" href="../comps/css/showinfo.css" >

        <title>Modulos</title>
    </head>
    <body>
        <a id="iraAncla" href="#ancla"></a>
        <input type="hidden" id="tocompare">
        <?php include '../comps/ShowInfo.php'; ?>
        <?php include './navsuperior.php'; ?>


        <div class="contenedorcentral" id="contenedorcentral">
            <div class="caja1 " id="caja1">
                <?php include '../comps/navlateral.php'; ?>
            </div>
            <div class="caja2" id="caja2">
                <div id="cuerpobox" class="container">
                    <div class="col-lg-12 ">

                        <div></div>



                        <div class="container-fluid" id="getbox" style="margin-bottom: 9px;">
                            <div>
                                <img style="display: inline-block" src="../img/logo.png" width="40" height="40">
                                &numsp;
                                <p style="display: inline-block; font-size: 18px; font-family: 'Permanent Marker',  cursive;"> Deliapp tiene muchas cosas para ti!</p></div>
                            <p style="display: inline-block; font-size: 16px; font-family: 'Rasa', serif;">Siempre estamos trabajando en nuevas cosas, puede
                                ser que te llegue una notificacion de una mejora en un modulo ya contratado , o que este a tu dispocion una nueva modalidad para agregar.</p>
                        </div>

                        <div class="container-fluid" >
                            <div class="boxmall">
                                <div class="container headermbox"><p>Modulos disponibles:</p><hr></div>



                                <?php
                                try {
                                    $stmt = $conn->prepare("CALL MODULOSgetAll();");

                                    $stmt->execute();
                                    $respuesta = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    $tam = count($respuesta);

                                    for ($i = 0; $i < $tam; $i++) {
                                        ?>



                                        <div style="display: inline-block">
                                            <div class="media border p-1" style="width: 325px; background-color: orange">
                                                <?php if ($respuesta[$i]['ses_et'] == 'ct') { ?> 
                                                    <i  class="mr-3 mt-3 rounded-circle material-icons " style="width:60px; padding-top: 4%;  font-size: 45px;"><?php echo $respuesta[$i]['ses_im']; ?></i>  <?php } else { ?>
                                                    <i  class="mr-3 mt-3 rounded-circle material-icons pulse" style="width:60px; color:olivedrab; padding-top: 4%;  font-size: 45px;"><?php echo $respuesta[$i]['ses_im']; ?></i>
                                                <?php } ?>

                                                <div class="media-body">
                                                    <h6><strong><?php echo $respuesta[$i]['ses_no']; ?></strong></h6>
                                                    <?php if ($respuesta[$i]['ses_et'] == 'ct') { ?> <p>Contratado</p> <?php } else { ?> <p class="pulse">Disponible</p> <?php } ?>

                                                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                                        <?php if ($respuesta[$i]['ses_et'] == 'ct') { ?>
                                                            <button onclick="showinf('<?php echo $respuesta[$i]['ses_no']; ?>', '<?php echo $respuesta[$i]['ses_de']; ?>')" type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModalLong">Descripcion</button><?php } else {
                                                            ?> <button onclick="showinf('<?php echo $respuesta[$i]['ses_no']; ?>',<?php echo $respuesta[$i]['ses_de']; ?>)"  type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModalLong">Descripcion</button>
                                                            <button type="button" class="btn btn-secondary btn-sm">Contratar</button> <?php } ?>

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


        <script src="../lib/jquery/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../lib/animation/js/animation.js" ></script>
        <script src="../lib/alertifyjs/js/alertify.js" ></script>

        <script src="controler/MODULOSGetAll.js" ></script>
      <script src="../comps/js/showinfo.js" ></script>



    </body>
</html>



