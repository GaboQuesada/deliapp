
<?php
@session_start();


if (!empty($_SESSION["usuarioid"]) && $_SESSION["Usuarios"] == 1) {


    $id = $_POST['iduss'];
    $op = $_POST['nbuss'];
} else {
    header("Location: ../comps/nomodule.php");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <?php include '../comps/compscss.php'; ?>
        <link rel="stylesheet" href="css/hdusuarios.css" >


        <title>Hello, world!</title>
    </head>
    <body>

        <div class="container">
            <div class="boxcontenthi slideDown">

                <div>
                    <div class="imgboxcon">
                        <center>
                            <img src="../img/logo.png" width="85" height="85"/>
                        </center>
                    </div>
                    <div class="boxtitle"><h3>Esta seguro de <strong><?php echo $op; ?></strong> al usuario: <strong><?php echo $id; ?></strong> </h3></div>
                </div>
                <ul>
                    <li class="itembox" ><i class="fas fa-clipboard-check" ></i>&numsp;Los usuarios no se pueden eliminar ya que por seguridad de los movimientos y del responsable de hacer cambios, facturas, reportes.</li>
                    <li class="itembox" ><i class="fas fa-clipboard-check" ></i>&numsp;Los usuarios se pueden cambiar de rol para dar o quitar privilegios.</li>
                    <li class="itembox" ><i class="fas fa-clipboard-check" ></i>&numsp;El nombre de usuario y el usuario como tal no se puede cambiar una vez creados.</li>
                    <li class="itembox" ><i class="fas fa-clipboard-check" ></i>&numsp;Los usuarios se pueden habilitar o deshabilitar en el futuro. </li>
                    <li class="itembox" ><i class="fas fa-clipboard-check" ></i>&numsp;No se eliminará ningún dato vinculado con este usuario. </li>
                </ul>
                <div style="margin-top:35px; margin-bottom: 25px;"><center>
                        <a href="usuarios.php" class="btn btn-light"><i class="fas fa-step-backward"></i> Regresar</a>
                        <form method="post" action="model/usuarioHDC.php" style="display: inline-block">\n\
                            <input type="hidden" value="<?php echo $id; ?>" name="iduss"/>\n\
                            <input type="hidden" value="<?php echo $op; ?>" name="nbuss"/>\n\
                            <button type="submit" class="btn btn-light">Continuar <i class="fas fa-step-forward"></i></button>
                        </form>
                     

                    </center>
                </div>

            </div>
        </div>


       <?php include '../comps/compsjs.php'; ?>

    </body>
</html>