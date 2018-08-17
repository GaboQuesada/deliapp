


<?php

@session_start();


if (!empty($_SESSION["usuarioid"])) {
    
} else {
    header("Location:../index.php");
}


if (isset($_POST['id'])) {

    $_SESSION['usertoaddid'] = $_POST['id'];
    $_SESSION['usertoaddname'] = $_POST['nb'];
     header("Location:../usuarios.php");
}


?>