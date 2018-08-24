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



<div class=" boxcontent" style="z-index: 4500">
    <nav class="nav flex-lg-column contenedor" style="z-index: 4500" >
        <?php
        try {
            $stmt = $conn->prepare("CALL ACCESOSGetRutas(:rol, :modu);");
            $stmt->bindParam(':rol',$_SESSION["rolid"]);
             $modulo = "Negocio";
            $stmt->bindParam(':modu',$modulo);


            $stmt->execute();
            $respuesta = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $tam = count($respuesta);

            for ($i = 0; $i < $tam; $i++) {
                ?>
        <a class="nav-link opcionmenu" onmousemove="showmsg('<?php echo $respuesta[$i]['sbm_no']; ?>')" onmouseout="hidemsg()"  onmouseenter="showmsg('<?php echo $respuesta[$i]['sbm_no']; ?>')"  href="<?php echo $respuesta[$i]['sbm_ur']; ?>"><img src="iconos/<?php echo $respuesta[$i]['sbm_im']; ?>"></a>

                    <?php
                }
            } catch (PDOException $e) {


                $respuesta['mensajelog'] = $e->getMessage();

                print json_encode($respuesta);
            }
            ?>
    </nav>
</div>