<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Planilla</a></li>
    <li><a data-toggle="tab" href="#menu1">Usuarios y privilegios</a></li>
    <li><a data-toggle="tab" href="#menu2">Horarios</a></li>
</ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <br>
        <div class="row"">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">  
                 
                        <label for="inputCursos" class="col-form-label">Cursos</label>
                        <select id="inputCursos" class="form-control">

                        </select>

                        <label for="inputEspacios" class="col-form-label">Espacios</label>
                        <select id="inputEspacios" class="form-control">

                        </select>
                        <label for="inputHoraIni" class="col-form-label">Hora Inicio</label>
                        <input type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57)
                                    event.returnValue = false;" maxlength="4" id="inputHoraIni" placeholder="Hora en Formato Militar" >

                        <label for="inputPriFecha" class="col-form-label">Primera Fecha</label>
                        <input type="date" class="form-control" id="inputPriFecha" >

                        <label for="inputConcurencia" class="col-form-label">Concurencia</label>
                        <input type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57)
                                    event.returnValue = false;" maxlength="1" id="inputConcurencia" placeholder="Concurencia en un Numero" >
                        <label for="inputCursos" class="col-form-label">Instructores</label>
                        <select id="inputInstructores" class="form-control">

                        </select>
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
                                    <th class="col-md-2">Curso</th>
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
</div>