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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <body>


        <nav class="navbar navbar-inverse navbar-fixed-top slideDown navup">
            <div class="container-fluid">
                <div class="navbar-header">
                    <img class="pulse" src="../img/logo.png" width="45" height="45"/>
                    <button class="btn btn-default navbar-btn"><i class="fas fa-utensils"></i></button>
                    <button class="btn btn-primary navbar-btn"><i class="fas fa-calculator"></i></button>
                    <button class="btn btn-primary navbar-btn"><i class="fas fa-shopping-cart"></i></button>
                    <button class="btn btn-primary navbar-btn"><i class="fas fa-sliders-h"></i></button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>


                </div>
                <div class="collapse navbar-collapse" id="myNavbar">



                    <ul class="nav navbar-nav">

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
                        <li class="dropdown"><a class="dropdown-toggle fas fa-cog " data-toggle="dropdown" href="#"></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fas fa-user-circle"></i> Adriana Villanueva</a></li>
                                <li><a href="#">Perfil</a></li>
                                <li><a href="#">Cambiar Contraseña</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fas fa-ambulance"></i></a></li>
                                <li><a href="#">Reportar Insidencia</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Salir</a></li>
                            </ul>
                        </li>


                        <li><a href="#"><i class="fas fa-envelope"></i><span class="badge">10</span></a></li>
                        <li><a href="#"><i class="far fa-comment-alt"></i><span class="badge">3</span></a></li>

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
