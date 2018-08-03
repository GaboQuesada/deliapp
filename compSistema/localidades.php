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
                            <div class="col-sm">
                                <strong><h5>Nueva Localidad</h5></strong>
                                <hr>
                                <input class="form-control form-control-sm" type="text" placeholder="Nombre">
                                <br>
                                 <input class="form-control form-control-sm" type="text" placeholder="Cédula jurídica/Física">
                                <br>
                                <select class="custom-select custom-select-sm mr-sm-2 " id="inlineFormCustomSelect">
                                    <option selected>Tipo de localidad...</option>


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
                                 <textarea class="form-control form-control-sm" placeholder="Descripción" id="exampleFormControlTextarea1" rows="3"></textarea>
                                 <br>
                                 <label>Logo:</label>
                                 <input class="form-control form-control-sm" type="file" placeholder="Logo">
                                  <br>
                                 <textarea class="form-control form-control-sm" placeholder="Dirección" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <br>
                                 <input class="form-control form-control-sm" type="text" placeholder="Sitio Web">
                                <br>
                               
                                <input class="form-control form-control-sm" type="email" placeholder="Correo">
                                <br>
                              
                                 <input class="form-control form-control-sm" type="text" placeholder="Facebook">
                                <br>
                                 
                                <input class="form-control form-control-sm" type="number" placeholder="Teléfono ">
                                <br>
                                <button type="button" class="btn btn-primary btn-sm btn-block">Agregar</button>

                            </div>
                            <div class="col-sm" style="background-color: white; padding-top: 10px;">
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
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
        <input type="hidden" id="rolid" />
        <script src="js/validaciones.js" ></script>

        <script src="js/showinfo.js" ></script>


    </body>
</html>






