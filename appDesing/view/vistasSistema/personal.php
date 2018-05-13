<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Planilla</a></li>
    <li><a data-toggle="tab" href="#menu1">Usuarios y privilegios</a></li>
    <li><a data-toggle="tab" href="#menu2">Horarios</a></li>
    <li><a data-toggle="tab" href="#menu3">Parametros</a></li>
</ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <br>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">  

                        <label for="inputPriFecha" class="col-form-label" style="font-size: 10px;">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" >

                        <label for="inputPriFecha" class="col-form-label" style="font-size: 10px;">Primer Apellido</label>
                        <input type="text" class="form-control" placeholder="Primer Apellido" >

                        <label for="inputPriFecha" class="col-form-label" style="font-size: 10px;">Segundo Apellido</label>
                        <input type="text" class="form-control" placeholder="Segundo Apellido" >

                        <label for="inputPriFecha" class="col-form-label" style="font-size: 10px;">Cedula</label>
                        <input type="text" class="form-control" placeholder="Cedula" >

                        <label for="inputPriFecha" class="col-form-label" style="font-size: 10px;"> Fecha Nacieiento</label>
                        <input type="date" class="form-control" id="inputPriFecha"  >

                        <label for="inputPriFecha" class="col-form-label" style="font-size: 10px;">Actividad</label>
                        <div class="input-group">
                      
                            <select class="form-control" id="sel1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="far fa-plus-square"></i></button>
                            </div>
                        </div>




                        <br>
                        <button  id="BtnAgendaCursosModificar" class="btn btn-success">Modificar</button>
                        <button  id="BtnAgendaCursosAgregar"   class="btn btn-success">Agregar</button>
                        <button  id="BtnAgendaCursosLimpiar"    class="btn btn-success">limpiar formulario</button>
                    </div>
                </div>

            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading"><center> Planilla Actual</center></div>
                    <div class="panel-body"><table class="table table-hover text-left">
                            <thead>
                                <tr>

                                    <th>#</th>
                                    <th class="col-md-2">Nombre</th>
                                    <th class="col-md-3">Espacio</th>
                                    <th class="col-md-3">Instructor</th>
                                    <th class="col-md-4">Opciones </th>

                                </tr>
                            </thead>
                            <tbody id="tableCursos">


                            </tbody>
                        </table>
                        <ul id="paginacionCursos" class="pagination">

                        </ul>
                        <div id="totalCursos"></div></div>
                </div>


            </div>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
        <h3>Menu 1</h3>
        <p>Some content in menu 1.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
        <h3>Menu 2</h3>
        <p>Some content in menu 2.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
        <div class="row">
            <br>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">  

                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="email">Nombre nueva actividad:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="comment">Descrioción:</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>

                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading"><center> Planilla Actual</center></div>
                    <div class="panel-body"> <table class=" table table-hover text-left">
                            <thead>
                                <tr>

                                    <th class="col-md-1">#</th>
                                    <th class="col-md-5">Nombre</th>

                                    <th class="col-md-6">Opciones </th>

                                </tr>
                            </thead>
                            <tbody id="tableCursos">


                            </tbody>
                        </table>
                        <ul id="paginacionCursos" class="pagination">

                        </ul>
                        <div id="totalCursos"></div></div>
                </div>
            </div>
        </div>

    </div>
</div>