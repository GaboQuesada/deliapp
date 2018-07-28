<div class="col-lg-4">

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
<div class="col-lg-8">
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
