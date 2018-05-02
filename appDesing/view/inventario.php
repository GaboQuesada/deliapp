    <?php
    @session_start();
    if (!empty($_SESSION['id'])) {
        
    } else {
        header("Location: ../../index.php");
    }
    if (@$_GET["cerrar"]) {
        session_destroy();
        header("location: id.php");
    }
    ?>
<!DOCTYPE html>
<html>
    <title>iNVENTARIO  DELIAPP YO VOY TECNOLOGIAS</title>

    <?php include_once '../../appDesing/view/components/callOnCss.php'; ?>
     <?php include_once '../../appDesing/view/components/callOnJs.php'; ?>
    <body >

        <!-- navebar top -->
        <?php include_once '../../appDesing/view/components/navUp.php'; ?>
        <!-- navebar left -->
        <?php include_once '../../appDesing/view/components/navLeft.php'; ?>


        <!-- Page Content -->
        <div class="containerboxmenu ">
            <div class="container-fluid  ">

                <!-- bodycontent -->
                <div class="col-md-12"> 

                    <div class="panel panel-default panelmainbox ">
                        <div class="panel-heading">Inventario</div>
                        <div class="panel-body">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Mesas</a></li>
                                <li><a data-toggle="tab" href="#menu1">Ordenes</a></li>
                                <li><a data-toggle="tab" href="#menu2">Reservas</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <h3>HOME</h3>
                                    <p>Some content.</p>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <h3>Menu 1</h3>
                                    <p>Some content in menu 1.</p>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <h3>Menu 2</h3>
                                    <p>Some content in menu 2.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footercontent -->  
            </div>
        </div>
        <div class="footercontentbox">
            <div class="container-fluid  ">
                <?php include_once '../../appDesing/view/components/footer.php'; ?>
            </div>
        </div>



    </body>
</html>