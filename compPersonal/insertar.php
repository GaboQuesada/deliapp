

<div class="col-lg-4"><br><div class="card">

        <div id="tituloUsuarios"class="card-header"><i class="fas fa-user-plus"></i> Agregar Persona</div>
        <div class="card-body">



            <form id="frmFormulario" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="labelsi" for="email"><i class="fas fa-users"></i> Cédula :</label>
                    <input type="text"  class="form-control form-control-sm"   id="ce">
                    <p id="isAble" ></p>
                </div>
                <div class="form-group">
                    <label class="labelsi" for="email"><i class="fas fa-users"></i> Nombre:</label>
                    <input type="text"  class="form-control form-control-sm"  id="no">
                    <p id="isAble" ></p>
                </div>

                <div class="form-group">
                    <label class="labelsi" for="email"><i class="fas fa-address-card"></i> Primer apellido:</label>
                    <input type="text"  class="form-control form-control-sm"   id="ap1">
                    <p id="isAble" ></p>
                </div>

                <div class="form-group">
                    <label class="labelsi" for="email"><i class="fas fa-address-card"></i> Segundo apellido:</label>
                    <input type="text"  class="form-control form-control-sm"   id="ap2">
                    <p id="isAble" ></p>
                </div>

                <div class="form-group">
                    <label class="labelsi" for="email"><i class="fas fa-calendar-alt"></i> Fecha Nacimiento:</label>
                    <input type="date"  class="form-control form-control-sm"   id="fn">
                    <p id="isAble" ></p>
                </div>



                <div class="form-group ">
                    <label class="labelsi" for="email"><i class="fas fa-building"></i> Departamento:</label>
                    <div class="input-group">

                        <select class="custom-select  form-control-sm" id="de">

                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary btn-sm " title="Agregar" data-toggle="modal" data-target="#newDep" type="button"><i class="fas fa-plus-square"></i></button>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="labelsi" for="email"><i class="fas fa-paint-brush"></i> Activiad o cargo:</label>
                    <div class="input-group">

                        <select class="custom-select form-control-sm" id="ca">


                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary btn-sm" title="Agregar" data-toggle="modal" data-target="#newCat" type="button"><i class="fas fa-plus-square"></i></button>
                        </div>
                    </div>
                </div>






                <button id="btnGuardaPla" class="btn btn-primary btn-sm"><i class="fas fa-archive"></i> Guardar</button>

            </form>
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
                    <center> <img src="../img/iconos/departamento.png"/></center>
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

    <script src="../syController/planilla/personagetAll.js" ></script>
    <script src="../syController/planilla/getActividades.js" ></script>
    <script src="../syController/planilla/getDepartamentos.js" ></script>
    <script src="../syController/planilla/insertActividades.js" ></script>
    <script src="../syController/planilla/insertDepartamentos.js" ></script>
    <script src="../syController/planilla/personaInsert.js" ></script>
    <script src="../syController/planilla/putInModalUpDatePlanilla.js" ></script>
    <script src="../syController/planilla/personaModificar.js" ></script>
    <script src="../syController/planilla/personaEliminar.js" ></script>

    <script type="text/javascript" >

        $(document).ready(function () {

            show(0);



        });


    </script>
