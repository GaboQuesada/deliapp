<a href="index.php">Regresar</a>
<br>
<?php
session_start();
echo $_SESSION["usuarioid"];
echo "<BR>";
echo $_SESSION["usuario"];
echo "<BR>";
echo $_SESSION["usuarioIMG"];
echo "<BR>";
echo $_SESSION["nombre"];
echo "<BR>";
echo $_SESSION["rolid"];
echo "<BR>";
echo $_SESSION["ronombre"];
echo "<BR>";
echo $_SESSION["departamento"];
echo "<BR>";
echo $_SESSION["cargo"];
?>