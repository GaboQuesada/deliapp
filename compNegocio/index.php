<?php
session_start();

if (!empty($_SESSION["usuarioid"])) {
    $_SESSION["modu"] = "Negocio";
    include '../comps/getIndex.php';
} else {
    header("Location: ../index.php");
}
?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <?php include '../comps/compscss.php'; ?>
        <link rel="stylesheet" href="../comps/css/index.css" >


        <title>Hello, world!</title>
    </head>
    <body>

        <div class="container" style="padding-top:25px; padding-bottom: 25px;">
            <?php include_once '../comps/navcomp.php'; ?>
        </div>
        <div class="container" >

            <?php
           
            getindex();
            ?>

        </div>


<?php include '../comps/compsjs.php'; ?>

    </body>
</html>