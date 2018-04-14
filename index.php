<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" >
        <link rel="stylesheet" href="lib/dropzone/dist/basic.css" >
        <link rel="stylesheet" href="lib/dropzone/dist/dropzone.css" >

    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
        <br>
        <section class="container">
            <section class="col-md-4 col-sm-12">


                <div class="panel panel-default">
                    <div class="panel-heading">Panel Heading</div>
                    <div class="panel-body"> <form action="/file-upload" class="dropzone"  method="post" enctype="multipart/form-data">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form></div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Panel Heading</div>
                    <div class="panel-body"> <form action="/file-upload" class="dropzone"  method="post" enctype="multipart/form-data">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form></div>
                </div>

            </section>
            <section class="col-md-8 col-sm-12">

                <div class="panel panel-default">
                    <div class="panel-heading">Datos a usar:</div>
                    <div class="panel-body">

                        <ul class="nav nav-tabs">
                            <li id="me0" class="active"><a onclick="activarseccion('me0')" data-toggle="tab" href="#familia">FAMILIAS</a></li>
                            <li id="me3"><a onclick="activarseccion('me1')" data-toggle="tab" href="#Productos">PRODUCTOS</a></li>
                            <li id="me3"><a onclick="activarseccion('me1')" data-toggle="tab" href="#Provedores">PROVEDORES</a></li>

                        </ul>

                        <div class="tab-content">
                            <div id="familia" class="tab-pane fade in active">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
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

                            <div id="Provedores" class="tab-pane fade in active">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>OPCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaresultadosProvedores">

                                    </tbody>
                                </table>
                                <ul id="listapaginacionProvedores" class="pagination">

                                </ul>
                                <div id="cantregProvedores"></div>
                            </div>


                            <div id="Productos" class="tab-pane fade">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Descripci&oacuten</th>
                                            <th>Precio</th>
                                            <th>Familia</th>
                                            <th>Exepto</th>
                                            <th>Provedor</th>
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

                        </div> 
                    </div>
                </div>
            </section>
        </section>

        <script src="lib/jquery/jquery-3.2.1.min.js"></script>
        <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src="lib/dropzone.js"></script>


    </body>
</html>
