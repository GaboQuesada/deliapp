<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div id="cosita"></div>
        <section class="container">
            <section class="col-md-4 col-sm-12"></section>
            <section class="col-md-8 col-sm-12">

                <div class="panel panel-default">
                    <div class="panel-heading">Datos a usar:</div>
                    <div class="panel-body">

                        <ul class="nav nav-tabs">
                            <li id="me0" class="active"><a onclick="activarseccion('me0')" data-toggle="tab" href="#familia">FAMILIAS</a></li>
                            <li id="me1"><a onclick="activarseccion('me1')" data-toggle="tab" href="#Grupos">GRUPOS</a></li>
                            <li id="me2"><a onclick="activarseccion('me2')" data-toggle="tab" href="#Mesas">MESAS</a></li>
                            <li id="me3"><a onclick="activarseccion('me3')" data-toggle="tab" href="#Productos">PRODUCTOS</a></li>
                            <li id="me4"><a onclick="activarseccion('me4')" data-toggle="tab" href="#Documentos">DOCUMENTOS</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="familia" class="tab-pane fade in active">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Familia Nombre</th>
                                            <th>Id Heredado</th>
                                            <th>OPCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaresultadosfamilia">

                                    </tbody>
                                </table>
                                <ul id="listapaginacionfamilia" class="pagination">

                                </ul>
                                <div id="cantregfamilia"></div>
                            </div>
                            <div id="Grupos" class="tab-pane fade">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Men&uacute Tipo</th>
                                            <th>Id Heredado</th>
                                            <th>OPCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaresultadosGrupos">

                                    </tbody>
                                </table>
                                <ul id="listapaginacionGrupos" class="pagination">

                                </ul>
                                <div id="cantregGrupos"></div>
                            </div>
                            <div id="Mesas" class="tab-pane fade">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Id Heredado</th>
                                            <th>OPCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaresultadosMesas">

                                    </tbody>
                                </table>
                                <ul id="listapaginacionMesas" class="pagination">

                                </ul>
                                <div id="cantregMesas"></div>
                            </div>
                            <div id="Productos" class="tab-pane fade">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Descripci&oacuten</th>
                                            <th>Precio</th>
                                            <th>Grupo</th>
                                            <th>Familia</th>
                                            <th>Id Heredado</th>
                                            <th>OPCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaresultadosProductos">
                                    </tbody>
                                </table>
                                <ul id="listapaginacionProductos" class="pagination">

                                </ul>
                                <div id="cantregProductos"></div>
                            </div>
                            <div id="Documentos" class="tab-pane fade">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Comentarios</th>
                                            <th>Fecha</th>
                                            <th>Hora</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaresultadosDocumentos">

                                    </tbody>
                                </table>
                                <ul id="listapaginacionDocumentos" class="pagination">

                                </ul>
                                <div id="cantregDocumentos"></div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
        </section>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/index.js"></script>
        <script src="js/familia.js"></script>
    </body>
</html>
