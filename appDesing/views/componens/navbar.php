<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" >
        <link rel="stylesheet" href="../css/navbar.css">
        <link rel="stylesheet" href="../css/menuizquierdo.css">
        <link rel="stylesheet" href="../css/footer.css">
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


        <div class="container-fluid containerboxmenu ">

            <div class="col-md-2 slideRight ">
                <div class="sidebar-nav menuizquierdo">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="visible-xs navbar-brand">menu</span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                            <div class="panel panel-default panelbrand">
                                <div class="panel-heading "> <p class="brandname">Jalapeño Restaurant </p></div>
                                <div class="panel-body  "><img class="logocliente center-block"src="../img/restlogo.jpg" width="90" height="90"/></div>
                            </div>
                            <ul class="nav navbar-nav">

                                <li><a href="#"> <i class="fas fa-user-circle"></i> Crear orden</a></li>
                                <li><a href="#"> <i class="fas fa-user-circle"></i> Clientes </a></li>
                                <li><a href="#"> <i class="fas fa-user-circle"></i> Reservar mesa</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 slideLeft"> 

                <div class="panel panel-default panelmainbox">
                    <div class="panel-heading">Ordenar</div>
                    <div class="panel-body">

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Mesas</a></li>
                            <li><a data-toggle="tab" href="#menu1">Ordenes</a></li>
                            <li><a data-toggle="tab" href="#menu2">Reservas</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <h3>HOME</h3>
                                <p>Some content.</p>
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
                    </div>
                </div>
            </div>

        </div>


        <!-- -->
        <div class="container-fluid">
            <section style="height:80px;"></section>
          
            <!----------- Footer ------------>
            <footer class="footer-bs">
                <div class="row">
                    <div class="col-md-3 footer-brand animated fadeInLeft">
                        <h2>Logo</h2>
                        <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                        <p>© 2014 BS3 UI Kit, All rights reserved</p>
                    </div>
                    <div class="col-md-4 footer-nav animated fadeInUp">
                        <h4>Menu —</h4>
                        <div class="col-md-6">
                            <ul class="pages">
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Nature</a></li>
                                <li><a href="#">Explores</a></li>
                                <li><a href="#">Science</a></li>
                                <li><a href="#">Advice</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contacts</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 footer-social animated fadeInDown">
                        <h4>Follow Us</h4>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">RSS</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-ns animated fadeInRight">
                        <h4>Newsletter</h4>
                        <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                        <p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                            </span>
                        </div><!-- /input-group -->
                        </p>
                    </div>
                </div>
            </footer>
            <section style="text-align:center; margin:10px auto;"> <p> <i class="fab fa-react fa-spin"></i><strong>Diseño y programación:</strong>Gabriel Quesada Sánchez </p></section>

        </div>
    
    </body>
</html>
