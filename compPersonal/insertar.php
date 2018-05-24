
<div class="col-lg-4"><br><div class="card">
        <div id="tituloUsuarios"class="card-header">Agregar Persona</div>
        <div class="card-body">


            <form id="frmFormulario" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email">Nombre:</label>
                    <input type="text"  class="form-control"  name="nb" id="nb">
                    <p id="isAble" ></p>
                </div>

                <div class="form-group">
                    <label for="email">Primer apellido:</label>
                    <input type="text"  class="form-control"  name="a1" id="nb">
                    <p id="isAble" ></p>
                </div>

                <div class="form-group">
                    <label for="email">Segundo apellido:</label>
                    <input type="text"  class="form-control"  name="a2" id="nb">
                    <p id="isAble" ></p>
                </div>

                <div class="form-group">
                    <label for="email">Fecha Nacimiento:</label>
                    <input type="date"  class="form-control"  name="ce" id="ce">
                    <p id="isAble" ></p>
                </div>

                <div class="form-group">
                    <label for="email">Activiad o cargo:</label>
                    <div class="input-group">

                        <select class="custom-select" id="ca">
                           
                            
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#newCat" type="button">Agregar</button>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Departamento:</label>
                    <div class="input-group">

                        <select class="custom-select" id="de">
                          
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#newCat" type="button">Agregar</button>
                        </div>
                    </div>
                </div>





                <input type="submit" id="btnUsuarioGuardar" value="Guardar" class="btn btn-primary">

            </form>
        </div> 

    </div></div>
<div class="col-lg-8">
    <br><div class="card">
        <div class="card-header">Personal</div>
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

<div class="modal fade" id="newCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Actividad o Cargo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form id="frmFormulario" enctype="multipart/form-data">
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
                <button type="button" id="aCancelar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="button" id="aGuardar" value="Guardar" class="btn btn-primary">
                  </form>
            </div>
        </div>
    </div>
</div>

  <script src="../syController/planilla/getActividades.js" ></script>
  <script src="../syController/planilla/getDepartamentos.js" ></script>
  <script src="../syController/planilla/insertActividades.js" ></script>