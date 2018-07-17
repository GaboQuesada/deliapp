<?php
@session_start();



if (!empty($_SESSION["usuarioid"])) {
    
} else {
    header("Location: ../index.php");
}
?>



<div class=" boxcontent">
    <nav class="nav flex-lg-column contenedor" >
        <a class="nav-link opcionmenu" title="Planilla" href="#"><img src="../img/iconos/planilla.png"></a>
        <a class="nav-link opcionmenu" title="Actividad" href="#"><img src="../img/iconos/actividad.png"></a>
        <a class="nav-link opcionmenu" title="Departamento" href="#"><img src="../img/iconos/departamento.png"></a>
        <a class="nav-link opcionmenu" title="Horarios" href="#"><img src="../img/iconos/horario.png"></a>
        <a class="nav-link opcionmenu" title="Información" href="#"><img src="../img/iconos/infodelempleado.png"></a>

    </nav>
</div>