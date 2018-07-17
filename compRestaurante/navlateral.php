<?php
@session_start();



if (!empty($_SESSION["usuarioid"])) {
    
} else {
    header("Location: ../index.php");
}
?>

<div class=" boxcontent">
    <nav class="nav flex-lg-column contenedor" >
        <a class="nav-link opcionmenu" href="#"><i class="fas fa-calculator "></i></a>
        <a class="nav-link opcionmenu" href="#"><i class="fas fa-balance-scale"></i></a>
        <a class="nav-link opcionmenu" href="#"><i class="fas fa-bed "></i></a>
        <a class="nav-link opcionmenu" href="#"><i class="fas fa-archive"></i></a>
        <a class="nav-link opcionmenu" href="#"><i class="fas fa-band-aid "></i></a>
    </nav>
</div>