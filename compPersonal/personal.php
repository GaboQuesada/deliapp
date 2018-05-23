<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="../2secciones/css/gsa.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    </head>

    <body>


        <?php include_once '../2secciones/gsanavbar.php'; ?>



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
                <div class="container"><div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4"><br><div class="card">
                                    <div id="tituloUsuarios"class="card-header">Agregar Persona</div>
                                    <div class="card-body">


                                        <form id="frmFormulario" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="email">usuario:</label>
                                                <input type="text"  class="form-control"  name="usus" id="usus">
                                                <p id="isAble" ></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Contraseña:</label>
                                                <input type="password" class="form-control" name="usps2" id="usps2">
                                            </div>


                                            <div id="image_preview">
                                                <img id="previewing" width="220" height="180" src="img/user.png" /></div>
                                            <div class="form-group">
                                                <label for="pwd">Imagén:</label>
                                                <input type="file" onchange="readURL(this);"  name="archivo" id="archivo">
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">Nombre Completo:</label>
                                                <input type="text"   class="form-control"  name="usnc" id="usnc">

                                            </div>


                                            <input type="submit" id="btnUsuarioGuardar" value="Guardar" class="btn btn-primary">

                                        </form>
                                    </div> 

                                </div></div>
                            <div class="col-lg-8">
                                <br><div class="card">
                                    <div class="card-header">Personal</div>
                                    <div class="card-body"><table class="table table-dark table-hover">
                                            <thead >
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Usuario</th>
                                                    <th>Imagén</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id="usuariosActules">

                                            </tbody>
                                        </table></div> 

                                </div> </div>

                        </div>


                    </div></div>

            </div>
        </div>


    </body>
</html>
