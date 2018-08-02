<?php
@session_start();

if (!empty($_SESSION["usuarioid"]) && $_SESSION["Actividades"] == 1) {
    
} else {
    header("Location: ../comps/nomodule.php");
}
?>

<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/planilla.css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="../lib/animation/css/animation.css" >
        <link rel="stylesheet" href="../lib/alertifyjs/css/alertify.css" >
        <link rel="stylesheet" href="../lib/alertifyjs/css/themes/semantic.css" >
        <link rel="stylesheet" href="css/boxmodel.css" >
        <link rel="stylesheet" href="css/menusuperior.css" >
        <link rel="shortcut icon" href="../img/favicon.ico">

        <link rel="stylesheet" href="css/menuseccion.css" >
        <link rel="stylesheet" href="css/boxcuerpo.css" >
        <link rel="stylesheet" href="css/showinfo.css" >

        <title>Actividades</title>
    </head>
    <body>
        <?php include_once './ShowInfo.php'; ?>
        <?php include './navsuperior.php'; ?>
        <a id="iraAncla" href="#ancla"></a>
        <input type="hidden" id="tocompare">



        <div class="contenedorcentral" id="contenedorcentral">
            <div class="caja1 " id="caja1">
              <?php include './navlateral.php'; ?>
            </div>
            <div class="caja2" id="caja2">

                <div id="cuerpobox" class="container">

                    <div class="col-lg-12 ">
                        <!-- Cuerpo -->


                        <div class="col-12 cajaEncabezado" >

                            <div class="col-2 align-self-center columEncabezado" ><img src="iconos/pla_Actividad.png">Actividades</div>
                            <div class="col-5 align-self-center columEncabezado" > <input type="text" id="actsearch" class="form-control form-control-sm" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1"></div>
                            <div class="col-4 align-self-center columEncabezado" ><button  class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#newCat" ><i class="fas fa-plus-square"></i> Agregar</button> 
                             </div>
                        </div>






                        <div id="actividadesBox" class="mainshowbox mainshowboxStyle">


                        </div>


                        <!--  MODAL INSERT ACTIVIDAD O CARGO -->
                        <div class="modal fade" id="newCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">

                                        <center> <img src="../img/iconos/actividad.png"/></center>
                                        <center><h6 class="modal-title" id="exampleModalLabel"><strong>Nuevo Cargo o actividad</strong></h6></center>

                                        <div class="form-group">
                                            <label for="email">Nombre:</label>
                                            <input type="text"  class="form-control"  name="nb" id="aNb">
                                            <p id="isAble" ></p>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Descripción:</label>
                                            <textarea class="form-control" id="aDe" rows="3"></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">

                                        
                                        <button  id="aGuardar" class="btn btn-primary btn-sm" > <i class="fas fa-archive"></i> Guardar</button>
                                        <button  id="aCancelar" class="btn btn-secondary btn-sm" data-dismiss="modal" ><i class="fas fa-broom"></i> Cancelar</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  MODAL UPDATE ACTIVIDAD O CARGO -->
                        <div class="modal fade" id="upDateCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">

                                        <center> <img src="../img/iconos/actividad.png"/></center>
                                        <center><h6 class="modal-title" id="exampleModalLabel"><strong>Actualizar Cargo o actividad</strong></h6></center>

                                        <div class="form-group">
                                            <label for="email">Nombre:</label>
                                            <input type="text"  class="form-control"  name="nb" id="acNb">
                                            <p id="isAble" ></p>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Descripción:</label>
                                            <textarea class="form-control" id="acDe" rows="3"></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden"  class="form-control"  name="nb" id="acId">



                                        <button  id="acGuardar" class="btn btn-primary btn-sm" ><i class="far fa-edit"></i> Modificar </button>

                                        <button  id="acCancelar" class="btn btn-secondary btn-sm" data-dismiss="modal" ><i class="fas fa-broom"></i> Cancelar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cuerpo -->                    

                    </div>

                </div>

            </div>
        </div>


        <script src="../lib/jquery/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../lib/animation/js/animation.js" ></script>
        <script src="../lib/alertifyjs/js/alertify.js" ></script>
        <script src="js/validaciones.js"></script>
        <script src="js/showinfo.js" ></script>
        <script src="controler/insertActividadesBox.js" ></script>
        <script src="controler/getActividadesBlock.js" ></script>
        <script src="controler/deletedActividades.js" ></script>
        <script src="controler/putInModalActividades.js" ></script>
        <script src="controler/upDateActividades.js" ></script>
        


    </body>
</html>