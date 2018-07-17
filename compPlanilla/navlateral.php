<?php
@session_start();
include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();


if (!empty($_SESSION["usuarioid"])) {
    
} else {
    header("Location: ../index.php");
}
?>



<div class=" boxcontent">
    <nav class="nav flex-lg-column contenedor" >
        <?php
        try {
            $stmt = $conn->prepare("CALL ACCESOSGetRutas(:rol, :modu);");
            $stmt->bindParam(':rol',$_SESSION["rolid"]);
            $modulo = "Planilla";
            $stmt->bindParam(':modu',$modulo);


            $stmt->execute();
            $respuesta = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $tam = count($respuesta);

            for ($i = 0; $i < $tam; $i++) {
                ?>
        <a class="nav-link opcionmenu" title="Planilla" href="<?php echo $respuesta[$i]['sbm_ur']; ?>"><img src="iconos/<?php echo $respuesta[$i]['sbm_im']; ?>"></a>

                    <?php
                }
            } catch (PDOException $e) {


                $respuesta['mensajelog'] = $e->getMessage();

                print json_encode($respuesta);
            }
            ?>
    </nav>
</div>