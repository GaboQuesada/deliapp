
<div class="col-lg-4"><br><div class="card">
        <div id="tituloUsuarios"class="card-header"><i class="fas fa-user-plus"></i> Agregar Persona</div>
        <div class="card-body">


            <form id="frmFormulario" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email"><i class="fas fa-users"></i> Nombre:</label>
                    <input type="text"  class="form-control"  name="nb" id="nb">
                    <p id="isAble" ></p>
                </div>

                <div class="form-group">
                    <label for="email"><i class="fas fa-address-card"></i> Primer apellido:</label>
                    <input type="text"  class="form-control"  name="a1" id="nb">
                    <p id="isAble" ></p>
                </div>

                <div class="form-group">
                    <label for="email"><i class="fas fa-address-card"></i> Segundo apellido:</label>
                    <input type="text"  class="form-control"  name="a2" id="nb">
                    <p id="isAble" ></p>
                </div>

                <div class="form-group">
                    <label for="email"><i class="fas fa-calendar-alt"></i> Fecha Nacimiento:</label>
                    <input type="date"  class="form-control"  name="ce" id="ce">
                    <p id="isAble" ></p>
                </div>

                <div class="form-group">
                    <label for="email"><i class="fas fa-paint-brush"></i> Activiad o cargo:</label>
                    <div class="input-group">

                        <select class="custom-select" id="ca">


                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" title="Agregar" data-toggle="modal" data-target="#newCat" type="button"><i class="fas fa-plus-square"></i></button>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email"><i class="fas fa-building"></i> Departamento:</label>
                    <div class="input-group">

                        <select class="custom-select" id="de">

                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" title="Agregar" data-toggle="modal" data-target="#newDep" type="button"><i class="fas fa-plus-square"></i></button>
                        </div>
                    </div>
                </div>





              
                <button class="btn btn-primary"><i class="fas fa-archive"></i> Guardar</button>

            </form>
        </div> 

    </div></div>
<div class="col-lg-8">
    <br><div class="card">
        <div class="card-header"><i class="fas fa-users"></i>Personal</div>
        <div class="card-body"><table class="table table-dark table-hover">
                <thead >
                    <tr>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Imagén</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody id="usuariosActules">

                </tbody>
            </table></div> 

    </div> </div>


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

<script src="../syController/planilla/getActividades.js" ></script>
<script src="../syController/planilla/getDepartamentos.js" ></script>
<script src="../syController/planilla/insertActividades.js" ></script>
<script src="../syController/planilla/insertDepartamentos.js" ></script>