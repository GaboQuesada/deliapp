<?php

include './connect.php';

$conexion = new Connect();
$conn = $conexion->conect();
$conexion->test();
?>