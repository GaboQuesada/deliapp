<?php
@session_start();



if (!empty($_SESSION["usuarioid"])) {
    
} else {
    header("Location: ../index.php");
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
        <link rel="stylesheet" href="css/menusuperior.css" >
        <link rel="stylesheet" href="css/boxmodel.css" >
        <link rel="stylesheet" href="css/menuseccion.css" >
        <link rel="stylesheet" href="css/planilla.css" >

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
            <div class="caja2 container" id="caja2">
                <div class="col-lg-12">
                    <!-- Cuerpo -->






                    <div class="col-lg-12" >
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page"><img src="../img/iconos/planilla.png">Planilla &nbsp; <button  class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#newCat" ><i class="fas fa-plus-square"></i> Agregar</button>  
                                </li> 
                            </ol>
                        </nav>




                    </div>




                    <div class="col-lg-12">


                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" id="actsearch" class="form-control" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                    </div>

                    <div class="col-lg-12" >


                        <div class="col-lg-12" id="actividadesBox">


                        </div>




                    </div>
                    <div class="col-lg-12 rounded" style=" padding: 2px; color:black;" >

                        <div class=" col-lg-11 nav justify-content-center rounded">
                            <hr>
                            <div>
                                <label> Orden Alfabetico</label>
                                <select style="width:89px;" class="custom-select form-control-sm " id="order">
                                    <option selected="true" value="A">A -> Z</option>
                                    <option value="D">Z -> A</option>
                                </select> 
                            </div>
                            &numsp;
                            <div  style="display: inline-block;">
                                <label> Cantidada mostrada</label>

                                <select style="width:89px;" class="custom-select form-control-sm " id="cantbloques">
                                    <option value="5" >5</option>
                                    <option value="10" selected="true">10</option>
                                    <option value="15" >15</option>
                                    <option value="20" >20</option>
                                    <option value="25" >25</option>
                                    <option value="50" >50</option>
                                </select> 
                            </div>
                            &numsp;
                            <div style="display: inline-block;"><p id="total"> </p></div>
                            &numsp;
                            <div  style="display: inline-block;"><ul id="bloques" class="pagination pagination-sm"></ul></div>

                        </div>
                    </div>



                    <!--  MODAL INSERT ACTIVIDAD O CARGO -->
                    <div class="modal fade" id="newCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form id="frmFormulario" enctype="multipart/form-data"> 
                                    <div class="modal-body">

                                        <div class="col-lg-12">

                                            <center> <img src="../img/iconos/planilla.png"/></center>
                                            <center><h6 class="modal-title" id="exampleModalLabel"><strong>INSERTAR</strong></h6></center>

                                            <hr>
                                            <center>
                                                <div class="form-group">
                                                    <label style="float: left" class="labelsi" for="email"><i class="fas fa-users"></i> Cédula :</label>
                                                    <input type="text"  class="form-control form-control-sm"   id="ce">
                                                    <p id="isAble" ></p>
                                                </div>
                                                <div class="form-group">
                                                    <label  style="float: left"  class="labelsi" for="email"><i class="fas fa-users"></i> Nombre:</label>
                                                    <input type="text"  class="form-control form-control-sm"  id="no">
                                                    <p id="isAble" ></p>
                                                </div>

                                                <div class="form-group">
                                                    <label  style="float: left"  class="labelsi" for="email"><i class="fas fa-address-card"></i> Primer apellido:</label>
                                                    <input type="text"  class="form-control form-control-sm"   id="ap1">
                                                    <p id="isAble" ></p>
                                                </div>

                                                <div class="form-group">
                                                    <label  style="float: left"  class="labelsi" for="email"><i class="fas fa-address-card"></i> Segundo apellido:</label>
                                                    <input type="text"  class="form-control form-control-sm"   id="ap2">
                                                    <p id="isAble" ></p>
                                                </div>

                                                <div class="form-group">
                                                    <label  style="float: left"  class="labelsi" for="email"><i class="fas fa-calendar-alt"></i> Fecha Nacimiento:</label>
                                                    <input type="date"  class="form-control form-control-sm"   id="fn">
                                                    <p id="isAble" ></p>
                                                </div>



                                                <div class="form-group ">
                                                    <label style="float: left"  class="labelsi" for="email"><i class="fas fa-building"></i> Departamento:</label>
                                                    <div class="input-group">

                                                        <select class="custom-select  form-control-sm" id="de">

                                                        </select>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary btn-sm " title="Agregar" data-toggle="modal" data-target="#newDep" type="button"><i class="fas fa-plus-square"></i></button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label  style="float: left"  class="labelsi" for="email"><i class="fas fa-paint-brush"></i> Activiad o cargo:</label>
                                                    <div class="input-group">

                                                        <select class="custom-select form-control-sm" id="ca">


                                                        </select>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary btn-sm" title="Agregar" data-toggle="modal" data-target="#newCat" type="button"><i class="fas fa-plus-square"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <center><div class="modal-footer">
                                                <button id="btnGuardaPla" class="btn btn-primary btn-sm"><i class="fas fa-archive"></i> Guardar</button>
                                                <button  id="aCancelar" class="btn btn-secondary btn-sm" data-dismiss="modal" ><i class="fas fa-broom"></i> Cancelar</button>

                                            </div></center>
                                    </div>
                                </form>




                            </div>
                        </div>
                    </div>

                    <!--  MODAL UPDATE ACTIVIDAD O CARGO -->
                    <div class="modal fade" id="upDateCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-body">

                                    <center> <img src="../img/iconos/departamento.png"/></center>
                                    <center><h6 class="modal-title" id="exampleModalLabel"><strong>Actualizar Departamento</strong></h6></center>

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



                                    <button  id="acGuardar" class="btn btn-primary" ><i class="far fa-edit"></i> Modificar</button>

                                    <button  id="acCancelar" class="btn btn-secondary" data-dismiss="modal" ><i class="fas fa-broom"></i> Cancelar</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="ipdatePlanilla" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-body">

                                    <center> <img src="../img/iconos/planilla.png"/></center>
                                    <center><h6 class="modal-title" id="exampleModalLabel"><strong>Actualizar Planilla</strong></h6></center>

                                    <center>
                                        <form id="frmFormulario" class="col-md-11" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="labelsi" style="float: left" for="email"><i class="fas fa-users"></i> Cédula :</label>
                                                <input type="text"  class="form-control form-control-sm"   id="ceu">
                                                <p id="isAble" ></p>
                                            </div>
                                            <div class="form-group">
                                                <label class="labelsi" style="float: left" for="email"><i class="fas fa-users"></i> Nombre:</label>
                                                <input type="text"  class="form-control form-control-sm"  id="nou">
                                                <p id="isAble" ></p>
                                            </div>

                                            <div class="form-group">
                                                <label class="labelsi" style="float: left" for="email"><i class="fas fa-address-card"></i> Primer apellido:</label>
                                                <input type="text"  class="form-control form-control-sm"   id="ap1u">
                                                <p id="isAble" ></p>
                                            </div>

                                            <div class="form-group">
                                                <label class="labelsi" style="float: left" for="email"><i class="fas fa-address-card"></i> Segundo apellido:</label>
                                                <input type="text"  class="form-control form-control-sm"   id="ap2u">
                                                <p id="isAble" ></p>
                                            </div>

                                            <div class="form-group">
                                                <label class="labelsi" style="float: left" for="email"><i class="fas fa-calendar-alt"></i> Fecha Nacimiento:</label>
                                                <input type="date"  class="form-control form-control-sm"   id="fnu">
                                                <p id="isAble" ></p>
                                            </div>



                                            <div class="form-group ">
                                                <label class="labelsi"style="float: left" for="email"><i class="fas fa-building"></i> Departamento:</label>


                                                <select class="custom-select form-control-sm " id="deu">

                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label class="labelsi" style="float: left" for="email"><i class="fas fa-paint-brush"></i> Activiad o cargo:</label>


                                                <select class="custom-select form-control-sm" id="cau">


                                                </select>

                                            </div>

                                        </form>
                                    </center>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden"  class="form-control"  name="nb" id="acIdu">



                                    <button  id="acGuardarurr" class="btn btn-primary btn-sm" ><i class="far fa-edit"></i> Modificar</button>

                                    <button  id="acCancelarurr" class="btn btn-secondary btn-sm" data-dismiss="modal" ><i class="fas fa-broom"></i> Cancelar</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cuerpo -->                    

                </div>
            </div>
        </div>


        <script src="../lib/jquery/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../lib/animation/js/animation.js" ></script>

        <script src="controler/personasgetAllFull.js" ></script>
        <script src="controler/putInModalUpDatePlanilla.js" ></script>
        <script src="controler/personaModificar.js" ></script>
        <script src="../syController/planilla/getActividades.js" ></script>
        <script src="../syController/planilla/getDepartamentos.js" ></script>
        <script src="../syController/planilla/personaEliminar.js" ></script>
        <script src="../syController/planilla/personaInsert.js" ></script>
        <script src="../syController/planilla/personaGetBySearch.js" ></script>

    </body>
</html>