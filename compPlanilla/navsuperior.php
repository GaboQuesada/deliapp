
<?php
@session_start();



if (!empty($_SESSION["usuarioid"])) {
    
} else {
    header("Location: ../index.php");
}
?>

<nav class="navbar fixed-top navbar-expand-md navbar-light bg-light fondo comfignav ">

    <a href="../compSessiones/lobby.php"><img  class="logoimg pulse" src="../img/logo.png" /></a>

    <a href="../compSessiones/lobby.php" class="btn btn-light btn-sm "><i class="fas fa-home"></i></a>
    &numsp;
    <a href="#" class="btn btn-info btn-sm "><i class="fas fa-calculator"></i></a>
    &numsp;
    <a href="#"  class="btn btn-info btn-sm "><i class="fas fa-shopping-cart"></i></a>
    &numsp;
    <a href="#"  class="btn btn-info btn-sm "><i class="fas fa-home"></i></a>
    &numsp;
    <a href="#"  class="btn btn-info btn-sm "><i class="fas fa-sliders-h"></i></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item">

            </li>
        </ul>



        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 form-control-sm" type="search" placeholder="Buscar" aria-label="Search">

        </form>
        <img  src="../compSession/userImg/<?php echo $_SESSION["usuarioIMG"]; ?>" width="30" height="30" class="rounded-circle" />
         &numsp;
        <span><?php echo $_SESSION["nombre"]; ?></span>
        <a class="nav-item nav-link navlinks" href="Perfil.php"><i class="fas fa-cog"></i></a>
        <a id="boxshowmsit" class="nav-item nav-link navlinks" href="#"><i class="fas fa-envelope"></i><span id="msnoti" class="badge badge-primary"></span></a>
        <a id="boxshowmsit" class="nav-item nav-link navlinks" href="#"><i class="far fa-comment-alt"></i><span id="msnoti" class="badge badge-primary"></span></a>
        <a class="nav-item nav-link navlinks" href="modelGeneral/salir.php"><i class="fas fa-sign-out-alt"></i></a>


    </div>

</nav>