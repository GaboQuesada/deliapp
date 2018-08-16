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


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="../lib/animation/css/animation.css" >
        <link rel="stylesheet" href="../lib/alertifyjs/css/alertify.css" >
        <link rel="stylesheet" href="../lib/alertifyjs/css/themes/semantic.min.css" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/menusuperior.css" >
        <link rel="stylesheet" href="css/boxmodel.css" >
        <link rel="stylesheet" href="css/boxcuerpo.css" >
        <link rel="stylesheet" href="css/menuseccion.css" >
        <link rel="stylesheet" href="css/localidades.css" >
        <link rel="shortcut icon" href="../img/favicon.ico">
        <link rel="stylesheet" href="css/showinfo.css" >

        <title>Localidades</title>
    </head>
    <body>
        <a id="iraAncla" href="#ancla"></a>
        <input type="hidden" id="tocompare">
        <?php include_once './ShowInfo.php'; ?>
        <?php include './navsuperior.php'; ?>


        <div class="contenedorcentral" id="contenedorcentral" style="margin-bottom: 25px;">
            <div class="caja1 " id="caja1">
                <?php include './navlateral.php'; ?>
            </div>
            <div class="caja2" id="caja2" style="margin-bottom:30px; padding-bottom: 30px;">
                <div id="cuerpobox" class="container"  style="margin-bottom:30px; padding-bottom: 30px;">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">


                                        <form>

                                            <div class="form-group">
                                                <label for="disabledTextInput">Nueva Caja</label>
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Nombre">
                                            </div>


                                            <button type="submit" class="btn btn-primary btn-block">Agregar</button>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                   <?php
                                        try {
                                            $stmt = $conn->prepare("CALL CAJASgetAll();");

                                            $stmt->execute();
                                            $respuesta = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                            $tam = count($respuesta);

                                            for ($i = 0; $i < $tam; $i++) {
                                                ?>

                                <div class="card" style="width: 9rem; display: inline-block">
                                    <center> <img width="82" height="82"src="iconos/cashbox.png" alt="Card image cap"></center>
                                    <div class="card-body">
                                        <center> <p class="card-text"><strong><?php echo $respuesta[$i]['caj_nb']; ?></strong></p> </center>
                                    </div>
                                </div>
                                
                          
                                
                                      <?php
                                            }
                                        } catch (PDOException $e) {


                                            $respuesta['mensajelog'] = $e->getMessage();

                                            print json_encode($respuesta);
                                        }
                                        ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>



        <script src="../lib/jquery/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../lib/animation/js/animation.js" ></script>
        <script src="../lib/alertifyjs/js/alertify.js" ></script>
        <script src="js/validaciones.js" ></script>
        <script src="controler/LOCALIDADinsert.js" ></script>
        <script src="controler/LocalidadesgetById.js" ></script>
        <script src="js/showinfo.js" ></script>


    </body>
</html>
