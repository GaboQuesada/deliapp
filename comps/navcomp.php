<nav class="navbar navbar-expand-lg navbar-light bg-light">

                <img src="../img/logo.png" width="30" height="30" class="" alt="">
                &numsp;
                <strong>Deliapp</strong>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="../compSesion/lobby.php"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-envelope notifybox"></i><span class="badge badge-info"> 0</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-comment-alt notifybox"></i><span class="badge badge-info"> 0</span></a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <img src="../compSesion/userImg/<?php echo $_SESSION["usuarioIMG"] ?>" width="35" height="35" class="rounded" alt="">
                        &numsp;
                        <span><?php echo $_SESSION["nombre"] ?></span>
                        <a class="nav-item nav-link" href="Perfil.php"><i class="fas fa-cog"></i></a>
                        <a class="nav-item nav-link " href="modelGeneral/salir.php"><i class="fas fa-sign-out-alt"></i></a>

                    </form>
                </div>
            </nav>