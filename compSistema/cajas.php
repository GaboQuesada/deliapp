<?php
@session_start();

if (!empty($_SESSION["usuarioid"]) && $_SESSION["Cajas"] == 1) {
    
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
                            <div class="col-lg-4" style="margin-bottom: 20px;">
                                <div class="card">
                                    <div class="card-body">


                                        <form enctype="multipart/form-data" method="post" name="newcashbox" id="newcashbox"</form>

                                        <div class="form-group">
                                            <label for="disabledTextInput"><strong>Nueva Caja</strong></label>
                                            <input type="text" id="pnb" name="pnb" class="form-control" placeholder="Nombre">
                                        </div>

                                        <select class="custom-select" id="loid" name="loid">

                                            <option value="0" selected>Seleccionar Localidad </option>
                                            <?php
                                            try {
                                                $stmt = $conn->prepare("CALL LOCALIDADESgetall();");

                                                $stmt->execute();
                                                $respuesta = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                $tam = count($respuesta);

                                                for ($i = 0; $i < $tam; $i++) {
                                                    ?>
                                                    <option value="<?php echo $respuesta[$i]['loc_id']; ?>"><?php echo $respuesta[$i]['loc_nb']; ?>  </option>

                                                    <?php
                                                }
                                            } catch (PDOException $e) {


                                                $respuesta['mensajelog'] = $e->getMessage();

                                                print json_encode($respuesta);
                                            }
                                            ?>
                                        </select>
                                        <br><br>


                                        <button type="submit" class="btn btn-primary btn-block">Agregar</button>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div id="listacajas"></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>



        <?php include '../comps/compsjs.php'; ?>
        <script src="controler/cajasInsert.js" ></script>
        <script src="controler/cajasGetAll.js" ></script>
        <script src="js/Rolessize.js" ></script>



    </body>
</html>
