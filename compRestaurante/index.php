<?php
@session_start();
include '../bd/connect.php';


if (!empty($_SESSION["usuarioid"])) {
    
} else {
    header("Location: ../index.php");
}?>

<!doctype html>
<html lang="en">
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="../lib/animation/css/animation.css" >
        <link rel="stylesheet" href="css/menusuperior.css" >
        <link rel="stylesheet" href="css/boxmodel.css" >
        <link rel="stylesheet" href="css/menuseccion.css" >

        <title>Hello, world!</title>
    </head>
    <body>

        <?php include './navsuperior.php'; ?>


        <div class="contenedorcentral" id="contenedorcentral">
            <div class="caja1 " id="caja1">
                <?php include './navlateral.php'; ?>
            </div>
            <div class="caja2" id="caja2">
                <div class="col-lg-12">

                    
                    
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../lib/animation/js/animation.js" ></script>
      
    </body>
</html>