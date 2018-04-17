<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" >
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="2.css">
        <link rel="stylesheet" href="3.css">
        <script type="text/javascript" src="lib/jquery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>



    <body>


        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li> 
                        <li><a href="#">Page 3</a></li> 
                    </ul>

                    <button class="btn btn-danger navbar-btn">Button</button>




                    <ul class="nav navbar-nav navbar-right">
                        <li> <form class="navbar-form navbar-left" action="/action_page.php">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form></li>

                        <li class="dropdown"><a class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" href="#">Sign Up<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Comments <span class="badge">10</span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container-fluid containerbox">
            <div class="row">
                <div class="col-sm-2">
                    <div class="sidebar-nav">
                        <div class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <span class="visible-xs navbar-brand">Sidebar menu</span>
                            </div>
                            <div class="navbar-collapse collapse sidebar-navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Menu Item 1</a></li>
                                    <li><a href="#">Menu Item 2</a></li>
                                    <li><a href="#">Menu Item 3</a></li>
                                    <li><a href="#">Menu Item 4</a></li>
                                    <li><a href="#">Reviews <span class="badge">1,118</span></a></li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-10"> <!-- Comienza el cuerpo-->
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
                                <div class="panel-body"> 

                                    <ul class="w3-ul w3-card-4 w3-white">
                                        <li class="w3-padding-16">
                                            <img src="/w3images/avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
                                            <span class="w3-xlarge">Mike</span><br>
                                        </li>
                                        <li class="w3-padding-16">
                                            <img src="/w3images/avatar5.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
                                            <span class="w3-xlarge">Jill</span><br>
                                        </li>
                                        <li class="w3-padding-16">
                                            <img src="/w3images/avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
                                            <span class="w3-xlarge">Jane</span><br>
                                        </li>
                                    </ul>
                                </div>
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
                </div>
            </div>
        </div>



    </body>
</html>
