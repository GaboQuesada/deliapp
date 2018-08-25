<?php
@session_start();



if (!empty($_SESSION["usuarioid"])) {
    
} else {
    header("Location: ../index.php");
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>Menú
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <?php
            try {
                $stmt = $conn->prepare("CALL ACCESOSGetRutas(:rol, :modu);");
                $stmt->bindParam(':rol', $_SESSION["rolid"]);
                $stmt->bindParam(':modu',$_SESSION["modu"]);


                $stmt->execute();
                $respuesta = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $tam = count($respuesta);

                for ($i = 0; $i < $tam; $i++) {
                    ?>

                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $respuesta[$i]['sbm_ur']; ?>"><img src="iconos/<?php echo $respuesta[$i]['sbm_im']; ?>"><?php echo $respuesta[$i]['sbm_no']; ?></a>
                    </li>
                    <?php
                }
            } catch (PDOException $e) {


                $respuesta['mensajelog'] = $e->getMessage();

                print json_encode($respuesta);
            }
            ?>
        </ul>
       
    </div>
</nav>






