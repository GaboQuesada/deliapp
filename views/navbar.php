<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" >

        <link rel="stylesheet" href="../css/navbar.css">
        <link rel="stylesheet" href="../css/animation.css">

        <script type="text/javascript" src="../lib/jquery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>



    <body>


        <nav class="navbar navbar-inverse navbar-fixed-top slideDown navup">
            <div class="container-fluid">
                <div class="navbar-header">
                    <img src="../img/logo.png" width="45" height="45"/>
                    <button class="btn btn-default navbar-btn">Ordenar</button>
                    <button class="btn btn-primary navbar-btn">Facturar</button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>


                </div>
                <div class="collapse navbar-collapse" id="myNavbar">



                    <ul class="nav navbar-nav">

                        <li class="active">&numsp;</li>
                        <li class="active"> <button class="btn btn-primary navbar-btn">Inventario</button></li>
                        <li class="active">&numsp;</li>
                        <li class="active"> <button class="btn btn-primary navbar-btn">Sistema</button></li>
                        <li class="active">&numsp;</li>


                    </ul>






                    <ul class="nav navbar-nav navbar-right">
                        <li id="formsearchmodulo">
                            <form class="navbar-form navbar-left" action="/action_page.php">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li><img  src="../img/profil.jpg" width="45" height="45" class="img-rounded profileImage" /></li>
                        <li class="dropdown"><a class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="badge">10</span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><img src="../img/logoyovoy.png" width="55" height="55" class="" /></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--
                <div class="container-fluid containerbox">
                   
                        <div class="col-md-2  bloqueizquierdo">
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
                                            <li><a href="#">Menu Item 1</a></li>
                                            <li><a href="#">Menu Item 2</a></li>
                                            <li><a href="#">Menu Item 3</a></li>
                                            <li><a href="#">Menu Item 4</a></li>
                                            <li><a href="#">Reviews <span class="badge">1,118</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 bloquederecho"> 
                          
                           
                        </div>
                   
                </div>
        
        -->
    </body>
</html>
