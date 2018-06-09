<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="../libx/alertifyjs/css/alertify.css" >
        <link rel="stylesheet" href="../libx/alertifyjs/css/themes/semantic.css" >
        <link rel="stylesheet" href="../libx/animation/css/animation.css" >
        <link rel="stylesheet" href="../css/menusuperior.css" >
        <link rel="stylesheet" href="../css/boxmodel.css" >
        <link rel="stylesheet" href="../css/menuseccion.css" >
         <link rel="stylesheet" href="../css/personal.css" >
        

        <title>Hello, world!</title>
    </head>
    <body>


        <div id="div_cargax">
            <img id="cargadorx" src="../img/gifcarga.gif"/>
        </div>

        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light fondo comfignav ">

            <img  class="logoimg pulse" onclick=" location.href = '../hall.php';"  src="../img/logo.png" />

            <button onclick=" location.href = '../hall.php';" class="btn btn-default botonespeincipales"><i class="fas fa-home"></i></button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">

                    </li>
                </ul>

                <div class="dropdown">

                    <i style="margin-right:10px;" class="fas fa-cog  " id="dropdownMenuButton" data-toggle="dropdown"></i> 
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i> Adriana Villanueva</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-address-card"></i> Editar Perfil</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Salir</a>
                    </div>
                </div>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 form-control-sm" type="search" placeholder="Search" aria-label="Search">

                </form>

                <h6><i class="fas fa-envelope notifybox"></i><span class="badge badge-info">0</span></h6>
                <h6><i class="far fa-comment-alt notifybox"></i><span class="badge badge-warning">0</span></h6>
                <img  src="../img/profil.jpg" class="imgperfil " />

            </div>

        </nav>


        <div class="contenedorcentral" id="contenedorcentral">
            <div class="caja1 " id="caja1">
                <div class=" boxcontent">
                    <nav class="nav flex-lg-column contenedor" >
                        <a id="A" class="nav-link opcionmenu" title="Planilla" href="#"><img src="../img/iconos/planilla.png"></a>
                        <a id="B" class="nav-link opcionmenu" title="Actividad" href="#"><img src="../img/iconos/actividad.png"></a>
                        <a id="C" class="nav-link opcionmenu" title="Departamento" href="#"><img src="../img/iconos/departamento.png"></a>

                        <a id="D" class="nav-link opcionmenu" title="Horarios" href="#"><img src="../img/iconos/horario.png"></a>
                        <a class="nav-link opcionmenu" title="Información" href="#"><img src="../img/iconos/infodelempleado.png"></a>

                    </nav>
                </div>
            </div>
            <div class="caja2" id="caja2">
                <div class="container"><div class="col-lg-12">
                        <div class="row" id="pagecontentbox">


                           


                        </div></div>

                </div>
            </div>



            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="../libx/jquery/jquery-3.2.1.min.js" ></script>
           
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            <script src="libx/animation/js/animation.js" ></script>
            <script src="../libx/alertifyjs/js/alertify.js" ></script>
            <script src="../js/index.js" ></script>
            <script src="../js/validaciones.js" ></script>
            <script src="js/switcherpage.js" ></script>
           
          





    </body>
</body>
</html>