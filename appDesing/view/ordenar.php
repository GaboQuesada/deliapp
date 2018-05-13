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
    <title>SISTEMA  DELIAPP YO VOY TECNOLOGIAS</title>

    <?php include_once '../../appDesing/view/components/callOnCss.php'; ?>
    <link href="../css/componens/mesas.css" rel="stylesheet" />
    

    <body >

        <!-- navebar top -->
        <?php include_once '../../appDesing/view/components/navUp.php'; ?>
        <!-- navebar left -->
        <?php include_once '../../appDesing/view/menusHorizontales/navLeftORDEN.php'; ?>


        <!-- Page Content -->
        <div class="containerboxmenu ">
            <div class="container-fluid  ">

                <!-- bodycontent -->
                <div class="col-md-12"> 

                    <div class="panel panel-default panelmainbox ">
                      
                        <div id="contenedordesub" class="panel-body   settingsPanel">
                            <!-- -->

                          
                            <!-- -->

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


        <?php include_once '../../appDesing/view/components/callOnJs.php'; ?>
        <script type="text/javascript" src="../js/ordenSwitchView.js"></script>
    </body>
</html>