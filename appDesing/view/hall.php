<html>
    <?php
    @session_start();
    if (!empty($_SESSION['id'])) {
        
    } else {
        header("Location: ../../index.php");
    }
    if (@$_GET["cerrar"]) {
        session_destroy();
        header("Location: ../../index.php");
    }
    ?>

    <head>
        <title>DELIAPP YO VOY TECNOLOGIAS</title>
        <link rel="stylesheet" href="../../lib/animation/css/animation.css">
        <link rel="stylesheet" href="../../lib/bootstrap3/css/bootstrap.min.css" >
        <link rel="stylesheet" href="../../appDesing/css/bodycontents/hall.css">

        <script type="text/javascript" src="../../lib/jquery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../lib/bootstrap3/js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/showtittleHall.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    </head>
    <body>


        <header id="header">
            <img id="logoempresa" src="../../appDesing/img/logoyovoy.png" height="90" width="90" /> 
            <img id="logodeli" src="../../appDesing/img/logo.png" height="90" width="90" /> 
            <p><?php echo $_SESSION['nb'] ?></p>
        </header>
        <div class="main">




            <section id="" class=" containerboxmediun col-md-12 container">

                <a href="ordenar.php" onmouseenter="setLabel('O')" onmouseout="RemoveLabel()"> <i class=" slideDown fas fa-utensils col-md-3 it "> </i></a>
                <a href="facturar.php" onmouseenter="setLabel('F')" onmouseout="RemoveLabel()"><i class=" slideLeft  fas fa-calculator  col-md-3 it "></i></a>
                <a href="inventario.php" onmouseenter="setLabel('I')" onmouseout="RemoveLabel()"><i class=" slideRight  fas fa-shopping-cart  col-md-3 it "></i></a>
                <a href="sistema.php" onmouseenter="setLabel('S')" onmouseout="RemoveLabel()"> <i class=" slideUp fas fa-sliders-h  col-md-3 it "></i></a>




            </section>

            <section  class="containerboxdawn">


                <center><p id="menutitle">INICIO</p></center>

            </section>
            <footer id="footer">
                <p> <i class="fab fa-react fa-spin"></i><strong>Diseño y programación:</strong>Gabriel Quesada Sánchez </p>
            </footer>
        </div>

        <ul class="cuadrados">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </body>
</html>