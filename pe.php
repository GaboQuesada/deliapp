<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="libx/alertifyjs/css/alertify.css" >
        <link rel="stylesheet" href="libx/alertifyjs/css/themes/semantic.css" >
        <link rel="stylesheet" href="libx/animation/css/animation.css" >
        <link rel="stylesheet" href="css/menusuperior.css" >
        <link rel="stylesheet" href="css/boxmodel.css" >
        <link rel="stylesheet" href="css/menuseccion.css" >
        <link rel="stylesheet" href="css/personal.css" >

        <title>Hello, world!</title>
    </head>
    <body>


        <div id="div_cargax">
            <img id="cargadorx" src="img/gifcarga.gif"/>
        </div>

       


        <div class="contenedorcentral" id="contenedorcentral">
            <div class="caja1 " id="caja1">
                <div class=" boxcontent">
                    
                </div>
            </div>
            <div class="caja2" id="caja2">
                <div class="container"><div class="col-lg-12">
                        <div class="row" id="pagecontentbox">


                            <div class="col-lg-4"><br><div class="card">

                                    <div id="tituloUsuarios"class="card-header"><i class="fas fa-user-plus"></i> Agregar Persona</div>
                                    <div class="card-body">


                                    </div> 

                                </div></div>
                            <div class="col-lg-8">
                                <br><div class="card">

                                    <div class="card-body">


                                        <input type="text" id="actsearch" class="form-control form-control-sm" placeholder="Buscar por cédula , nombre o apellidos" aria-label="Username" aria-describedby="basic-addon1">
                                        <br>

                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Cédula</th>
                                                        <th scope="col">Nombre</th>
                                                        <th scope="col">Departamento</th>
                                                        <th scope="col">Cargo</th>
                                                        <th scope="col">Opc</th>
                                                    </tr>

                                                </thead>
                                                <tbody id="resultados">

                                                </tbody>
                                            </table>

                                            <div class="col-lg-12">
                                                <div  style="display: none; visibility: hidden">
                                                    <select style="width:89px;" class="custom-select form-control-sm " id="cant">
                                                        <option selected="true">A -> Z</option>
                                                        <option>Z -> A</option>
                                                    </select> 
                                                </div>
                                                <div  style="display: inline-block;">
                                                    <select style="width:89px;" class="custom-select form-control-sm " id="cantbloques">
                                                        <option value="5" >5</option>
                                                        <option value="10" selected="true">10</option>
                                                        <option value="15" >15</option>
                                                        <option value="20" >20</option>
                                                        <option value="25" >25</option>
                                                        <option value="50" >50</option>
                                                    </select> 
                                                </div>
                                                <div style="display: inline-block;"><p id="total"></p></div>
                                                <div  style="display: inline-block;"><ul id="bloques" class="pagination pagination-sm"></ul></div>

                                            </div>




                                        </div> </div></div>


                                <!--  MODAL INSERT ACTIVIDAD O CARGO -->
                                <div class="modal fade" id="newCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">

                                                <center> <img src="img/iconos/actividad.png"/></center>
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

                                                <button  id="aCancelar" class="btn btn-secondary" data-dismiss="modal" ><i class="fas fa-broom"></i> Cancelar</button>
                                                <button  id="aGuardar" class="btn btn-primary" > <i class="fas fa-archive"></i> Guardar</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--  MODAL INSERT DEPARTAMENTO -->
                                <div class="modal fade" id="newDep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <center> <img src="img/iconos/departamento.png"/></center>
                                                <center><h6 class="modal-title" id="exampleModalLabel"><strong>Nuevo Departamento</strong></h6></center>



                                                <div class="form-group">
                                                    <label for="email">Nombre:</label>
                                                    <input type="text"  class="form-control"  name="nb" id="dNb">
                                                    <p id="isAble" ></p>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Descripción:</label>
                                                    <textarea class="form-control" id="dDe" rows="3"></textarea>
                                                </div>






                                            </div>
                                            <div class="modal-footer">

                                                <button  id="dCancelar" class="btn btn-secondary" data-dismiss="modal" ><i class="fas fa-broom"></i> Cancelar</button>
                                                <button  id="dGuardar" class="btn btn-primary" > <i class="fas fa-archive"></i> Guardar</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade" id="ipdatePlanilla" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">

                                                <center> <img src="img/iconos/planilla.png"/></center>
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



                            </div>


                        </div></div>

                </div>
            </div>



            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="libx/jquery/jquery-3.2.1.min.js" ></script>
            <script src="syController/planilla/personagetAll.js" ></script>
            <script src="syController/planilla/personaInsert.js" ></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            <script src="libx/animation/js/animation.js" ></script>
            <script src="libx/alertifyjs/js/alertify.js" ></script>
            <script src="js/index.js" ></script>
            <script src="js/validaciones.js" ></script>
         
            <script type="text/javascript" >

                $(document).ready(function () {

                    show(0);



                });


            </script>





    </body>
</body>
</html>