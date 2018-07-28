<?php
@session_start();

if (!empty($_SESSION["usuarioid"]) && $_SESSION["Departamentos"] == 1) {
    
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
        <link rel="stylesheet" href="css/menusuperior.css" >
        <link rel="stylesheet" href="css/boxmodel.css" >
        <link rel="stylesheet" href="css/boxcuerpo.css" >
        <link rel="stylesheet" href="css/menuseccion.css" >
        <link rel="stylesheet" href="css/planilla.css" >
        <link rel="shortcut icon" href="../img/favicon.ico">

        <title>Hello, world!</title>
    </head>
    <body>
        <a id="iraAncla" href="#ancla"></a>
        <input type="hidden" id="tocompare">
        <?php include './navsuperior.php'; ?>


        <div class="contenedorcentral" id="contenedorcentral">
            <div class="caja1 " id="caja1">
                <?php include './navlateral.php'; ?>
            </div>
            <div class="caja2" id="caja2">
                <div id="cuerpobox" class="container">
                    <div class="col-lg-12 ">

                        <div class="container">
                            <div class="row">
                                <div class="col-sm">


                                    <div class="card">

                                        <div id="tituloUsuarios"class="card-header"> Agregar Role</div>
                                        <div class="card-body">



                                            <form id="frmFormulario" enctype="multipart/form-data">
                                                <div class="form-group">

                                                    <input type="text"  class="form-control form-control-sm"   id="rnb" placeholder="Nombre">
                                                    <p id="isAble" ></p>
                                                </div>
                                                <div class="form-group">

                                                    <input type="text"  class="form-control form-control-sm"  id="rde" placeholder="Descripción">
                                                    <p id="isAble" ></p>
                                                </div>


                                                <button id="btnGuaradarRoll" class="btn btn-primary btn-sm"><i class="fas fa-archive"></i> Guardar</button>

                                            </form>
                                        </div> 

                                    </div>
                                    <br>
                                    <div class="card">

                                        <div id="tituloUsuarios"class="card-header">Lita de Roles</div>
                                        <div class="card-body">
                                            <ul class="list-group" id="showroles">

                                            </ul>
                                        </div> 

                                    </div>


                                </div>
                                <div class="col-sm">

                                    <div class="card">

                                        <div id="tituloUsuarios"class="card-header"> Permisos del Role </div>
                                        <div class="card-body">


                                            <div id="boxalert" class="alert alert-success" role="alert">
                                                Seleciona un Role de la <strong>lista de Roles </strong>, luego seleciona los <strong>modulos</strong> y edita los permisos de acceso.
                                            </div>

                                            <div id="boxinfoshowrole">

                                                <div style="margin-bottom: 10px;">Editando accesos para: <spam><strong id="labelrol"></strong></spam> &numsp;<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#norol">
                                                        Ver info del Role
                                                    </button></div>
                                                <p>Para editar un acceso seleciona el modulo, y da clcik sobre el submodulo</p>
                                                <div id="accordion">




                                                </div>
                                            </div>



                                        </div> 

                                    </div>

                                </div>

                            </div>
                        </div>




                        <div class="modal fade" id="norol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Info del role</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">

                                                <input type="email" class="form-control" id="rolsetnb" aria-describedby="emailHelp" placeholder="Nombre">

                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="rolsetde" rows="3"></textarea>
                                            </div>


                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button  type="button" id="upromh" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                                        <!-- <button type="button" id="saveroldata" class="btn btn-primary btn-sm">Guardar</button> -->
                                    </div>
                                </div>
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
        <input type="hidden" id="rolid" />
        <script src="../syController/sistema/rolInsert.js" ></script>
        <script src="../syController/sistema/rolgetAll.js" ></script>
        <script src="../syController/sistema/rolsetInfo.js"></script>
        <script src="../syController/sistema/subModulosGet.js"></script>
        <script src="../syController/sistema/acceset.js"></script>
        <script src="../syController/sistema/rolesUpdate.js"></script>


    </body>
</html>




<input type="hidden" id="rolid" />
<script src="../syController/sistema/rolInsert.js" ></script>
<script src="../syController/sistema/rolgetAll.js" ></script>
<script src="../syController/sistema/rolsetInfo.js"></script>
<script src="../syController/sistema/subModulosGet.js"></script>
<script src="../syController/sistema/acceset.js"></script>
<script src="../syController/sistema/rolesUpdate.js"></script>

