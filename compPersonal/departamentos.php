




<div class="col-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><img src="../img/iconos/departamento.png">Departamentos &nbsp; <button  class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#newCat" ><i class="fas fa-plus-square"></i> Agregar</button> </li> 
        </ol>
    </nav>




</div>


<div class="col-12">


    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
        </div>
        <input type="text" id="actsearch" class="form-control" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
    </div>

</div>

<div class="col-12" id="actividadesBox"></div>


<!--  MODAL INSERT ACTIVIDAD O CARGO -->
<div class="modal fade" id="newCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <center> <img src="../img/iconos/departamento.png"/></center>
                <center><h6 class="modal-title" id="exampleModalLabel"><strong>Nuevo Departamento</strong></h6></center>

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

<a id="iraAncla" href="#ancla"></a>
<input type="hidden" id="tocompare">
<script src="../syController/planilla/putInModalDepartamentos.js" ></script>
<script src="../syController/planilla/getDepartamentosBlock.js" ></script>
<script src="../syController/planilla/insertDepartamentosBox.js" ></script>
<script src="../syController/planilla/upDateDepartamentos.js" ></script>
<script src="../syController/planilla/deletedDepartamentos.js" ></script>
