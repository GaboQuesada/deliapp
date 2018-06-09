
<style type="text/css">
    .personalinfo{

        margin: 0px;
        padding: 0px;

    } 

    .boxinfo{
        padding: 5px;
        background-color: #edebe6;
        border-radius: 10px 10px 10px 10px;
        -moz-border-radius: 10px 10px 10px 10px;
        -webkit-border-radius: 10px 10px 10px 10px;
        border: 1px solid #000000;
        margin-bottom: 2px;
    }

</style>




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
        <div style="display: inline-block;"><p id="total"> 7</p></div>
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

<a id="iraAncla" href="#ancla"></a>
<input type="hidden" id="tocompare">
<script src="../syController/planilla/personasgetAllFull.js" ></script>

