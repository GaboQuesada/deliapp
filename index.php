<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="libs/animation/css/animation.css" >
        <link rel="stylesheet" href="css/menusuperior.css" >
        <link rel="stylesheet" href="css/boxmodel.css" >
        <link rel="stylesheet" href="css/menuseccion.css" >

        <title>Hello, world!</title>
    </head>
    <body>

        <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light fondo comfignav ">

            <img  class="logoimg pulse" src="img/logo.png" />

            <button onclick=" location.href = '../view/ordenar.php';" class="btn btn-default botonespeincipales"><i class="fas fa-utensils"></i></button>
            <button onclick=" location.href = '../view/facturar.php';" class="btn btn-primary botonespeincipales "><i class="fas fa-calculator"></i></button>
            <button onclick=" location.href = '../view/inventario.php';" class="btn btn-primary botonespeincipales "><i class="fas fa-shopping-cart"></i></button>
            <button onclick=" location.href = '../view/sistema.php';"  class="btn btn-primary botonespeincipales"><i class="fas fa-sliders-h"></i></button>
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
                <img  src="img/profil.jpg" class="imgperfil " />

            </div>

        </nav>


        <div class="contenedorcentral" id="contenedorcentral">
            <div class="caja1 " id="caja1">
                <div class=" boxcontent">
                    <nav class="nav flex-lg-column contenedor" >
                        <a class="nav-link opcionmenu" href="#"><i class="fas fa-calculator "></i></a>
                        <a class="nav-link opcionmenu" href="#"><i class="fas fa-balance-scale"></i></a>
                        <a class="nav-link opcionmenu" href="#"><i class="fas fa-bed "></i></a>
                        <a class="nav-link opcionmenu" href="#"><i class="fas fa-archive"></i></a>
                        <a class="nav-link opcionmenu" href="#"><i class="fas fa-band-aid "></i></a>
                    </nav>
                </div>
            </div>
            <div class="caja2" id="caja2">
                <div class="col-lg-12">frfrfrfrfgrfrfr</div>
            </div>
        </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="libs/animation/js/animation.js" ></script>
        <script src="index.js" ></script>
    </body>
</html>