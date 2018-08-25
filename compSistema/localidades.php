<?php
@session_start();

if (!empty($_SESSION["usuarioid"]) && $_SESSION["Localidades"] == 1) {
    
} else {
    header("Location: ../comps/nomodule.php");
}
?>

<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <?php include '../comps/compscss.php'; ?>


        <title>Localidades</title>
    </head>
    <body>
        <a id="iraAncla" href="#ancla"></a>
        <input type="hidden" id="tocompare">
        <?php include '../comps/ShowInfo.php'; ?>
        <?php include '../comps/navsuperior.php'; ?>


        <div>
            <div class="caja1 " id="caja1">
                <?php include '../comps/navlateral.php'; ?>
            </div>
            <div class="caja2" id="caja2">
                <div class="navbarlateral">
                    <?php include '../comps/navlateralbar.php'; ?>
                </div>
                <div id="masterbox">
                    <div id="boxcontrol" class="container">
                        <div class="row">
                            <div class="col-md">
                                <strong><h5>Nueva Localidad</h5></strong>
                                <hr>
                                <form enctype="multipart/form-data" method="post" name="fileinfo" id="fileinfo"</form>
                                <input class="form-control form-control-sm" name="pnb" id="pnb"  type="text" placeholder="Nombre">
                                <br>
                                <input class="form-control form-control-sm" name="pce" id="pce" type="text" placeholder="Cédula jurídica/Física">
                                <br>
                                <select class="custom-select custom-select-sm mr-sm-2 " name="ptl" id="ptl">
                                    <option value="0" selected>Tipo de localidad...</option>


                                    <?php
                                    try {
                                        $stmt = $conn->prepare("CALL TIPOLOCALIDADgetall;");


                                        $stmt->execute();
                                        $respuesta = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        $tam = count($respuesta);

                                        for ($i = 0; $i < $tam; $i++) {
                                            ?>

                                            <option value="<?php echo $respuesta[$i]['til_id']; ?>"><?php echo $respuesta[$i]['til_nb']; ?></option>
                                            <?php
                                        }
                                    } catch (PDOException $e) {

                                        $respuesta['estado'] = "0";
                                        $respuesta['mensajelog'] = $e->getMessage();
                                        $respuesta['mensaje'] = "Ha ocurrido un error.";
                                        print json_encode($respuesta);
                                    }
                                    ?>
                                </select>
                                <br>
                                <br>
                                <textarea class="form-control form-control-sm" placeholder="Descripción" name="pde" id="pde" rows="3"></textarea>
                                <br>
                                <label>Logo:</label>
                                <input class="form-control form-control-sm" name="pim" id="pim"  type="file" placeholder="Logo">
                                <br>
                                <textarea class="form-control form-control-sm" placeholder="Dirección" name="pdir" id="pdir"  rows="3"></textarea>
                                <br>
                                <input class="form-control form-control-sm" type="text" name="pweb" id="pweb" placeholder="Sitio Web">
                                <br>

                                <input class="form-control form-control-sm" name="pco" id="pco" type="email" placeholder="Correo">
                                <br>

                                <input class="form-control form-control-sm" name="pfa" id="pfa" type="text" placeholder="Facebook">
                                <br>

                                <input class="form-control form-control-sm" type="number" name="ptel" id="ptel" placeholder="Teléfono ">
                                <br>

                                <input type="submit" class="btn btn-primary btn-sm btn-block" value="Agregar" />
                                </form>
                            </div>
                            <div class="col-md" style="background-color: white; padding-top: 10px;">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        try {
                                            $stmt = $conn->prepare("CALL LOCALIDADESgetall();");

                                            $stmt->execute();
                                            $respuesta = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                            $tam = count($respuesta);

                                            for ($i = 0; $i < $tam; $i++) {
                                                ?>


                                                <tr>
                                                    <th scope="row"><?php echo $i + 1; ?></th>
                                                    <td><?php echo $respuesta[$i]['loc_nb']; ?></td>
                                                    <td><?php echo $respuesta[$i]['til_nb']; ?></td>
                                                    <td><button type="button" onclick="morinfo('<?php echo $respuesta[$i]['loc_id']; ?>')" data-toggle="modal" data-target="#exampleModal" class="btn btn-info btn-sm">Info</button></td>
                                                </tr>
                                                <?php
                                            }
                                        } catch (PDOException $e) {


                                            $respuesta['mensajelog'] = $e->getMessage();

                                            print json_encode($respuesta);
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal info -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="minfo" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>

                        </button>
                    </div>
                    <div class="modal-body">

                        <p><strong>Nombre:</strong>&numsp;<span id="nb"></span></p>
                        <p><strong>Cédula:</strong>&numsp;<span id="ce"></span></p>
                        <p><strong>Tipo:</strong>&numsp;<span id="tl"></span></p>
                        <p><strong>Descripción:</strong>&numsp;<span id="de"></span></p>
                        <p><strong>Direcciób:</strong>&numsp;<span id="di"></span></p>
                        <p><strong>Web:</strong>&numsp;<span id="web"></span></p>
                        <p><strong>Correo:</strong>&numsp;<span id="co"></span></p>
                        <p><strong>Facebook:</strong>&numsp;<span id="fb"></span></p>
                        <p><strong>Teléfono:</strong>&numsp;<span id="tel"></span></p>

                        <center>
                            <div  id="imgp"></div>

                        </center>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <?php include '../comps/compsjs.php'; ?>
        <script src="controler/LOCALIDADinsert.js" ></script>
        <script src="controler/LocalidadesgetById.js" ></script>
        <script src="js/Rolessize.js" ></script>



    </body>
</html>
