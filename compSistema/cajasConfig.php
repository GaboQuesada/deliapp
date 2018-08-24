<?php
@session_start();

if (!empty($_SESSION["usuarioid"]) && $_SESSION["Cajas"] == 1) {


    $cid = $_POST['caid'];
    $cnb = $_POST['canb'];
    $clo = $_POST['calo'];
} else {
    header("Location: ../comps/nomodule.php");
}
?>

<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="../lib/animation/css/animation.css" >
        <link rel="stylesheet" href="../lib/alertifyjs/css/alertify.css" >
        <link rel="stylesheet" href="../lib/alertifyjs/css/themes/semantic.min.css" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/menusuperior.css" >
        <link rel="stylesheet" href="css/boxmodel.css" >
        <link rel="stylesheet" href="css/boxcuerpo.css" >
        <link rel="stylesheet" href="css/menuseccion.css" >
        <link rel="stylesheet" href="css/setcingigcaja.css" >
        <link rel="stylesheet" href="css/boxsearchCajaUser.css" >
        <link rel="shortcut icon" href="../img/favicon.ico">
        <link rel="stylesheet" href="../comps/css/showinfo.css" >

        <title>Localidades</title>
    </head>
    <body>
        <a id="iraAncla" href="#ancla"></a>
        <input type="hidden" id="tocompare">
       <?php include '../comps/ShowInfo.php'; ?>
        <?php include './navsuperior.php'; ?>

        cjid
        <div class="contenedorcentral" id="contenedorcentral" style="margin-bottom: 25px;">
            <div class="caja1 " id="caja1">
                <?php include '../comps/navlateral.php'; ?>
            </div>
            <div class="caja2" id="caja2" style="margin-bottom:30px; padding-bottom: 30px;">
                <div id="cuerpobox" class="container"  style="margin-bottom:30px; padding-bottom: 30px;">

                    <div class="boxcontenthi slideDown" style="padding-bottom: 25px;">

                        <div>
                            <div class="imgboxcon">
                                <center>
                                    <img src="../img/logo.png" width="45" height="45"/>
                                </center>
                            </div>
                            <div class="boxtitle"><h4>Configurando la caja: <strong><?php echo $cnb; ?></strong> Vinculada a: <strong><?php echo $clo; ?></strong> </h4></div>
                        </div>
                        <div style="margin-top:35px; margin-bottom: 25px; padding: 15px; background-color: whitesmoke; margin-left: 15px; margin-right: 15px;">
                            <form enctype="multipart/form-data" method="post" name="newcashbox" id="newcashbox">
                                <input type="hidden" name="" id="cjid" value="<?php echo $cid; ?>" />
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Empezando el:</label>
                                            </div>
                                            <select class="custom-select" id="pcdi" name="pcdi">
                                                <option value="nd"selected>Selecionar el día de inicio...</option>

                                                <option value="1">Lunes</option>
                                                <option value="2">Martes</option>
                                                <option value="3">Miercoles</option>
                                                <option value="4">Jueves</option>
                                                <option value="5">Viernes</option>
                                                <option value="6">Sabado</option>
                                                <option value="0">Domingo</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Hora inico:</label>
                                            </div>
                                            <select class="custom-select" id="pchi" name="pchi">
                                                <option value="nd"selected>Selecionar la hora inicio...</option>
                                                <option value="0">formato (12)&numsp;0:00&numsp;    formato (24)&numsp;0:00    Am</option>
                                                <option value="0.5">formato (12)&numsp;0:30&numsp;    formato (24)&numsp;0:30    Am</option>
                                                <option value="1">formato (12)&numsp;1:00&numsp;    formato (24)&numsp;1:00    Am</option>
                                                <option value="1.5">formato (12)&numsp;1:30&numsp;    formato (24)&numsp;1:30    Am</option>
                                                <option value="2">formato (12)&numsp;2:00&numsp;    formato (24)&numsp;2:00    Am</option>
                                                <option value="2.5">formato (12)&numsp;2:30&numsp;    formato (24)&numsp;2:30    Am</option>
                                                <option value="3">formato (12)&numsp;3:00&numsp;    formato (24)&numsp;3:00    Am</option>
                                                <option value="3.5">formato (12)&numsp;3:30&numsp;    formato (24)&numsp;3:30    Am</option>
                                                <option value="4">formato (12)&numsp;4:00&numsp;    formato (24)&numsp;4:00    Am</option>
                                                <option value="4.5">formato (12)&numsp;4:30&numsp;    formato (24)&numsp;4:30    Am</option>
                                                <option value="5">formato (12)&numsp;5:00&numsp;    formato (24)&numsp;5:00    Am</option>
                                                <option value="5.5">formato (12)&numsp;5:30&numsp;    formato (24)&numsp;5:30    Am</option>
                                                <option value="6">formato (12)&numsp;6:00&numsp;    formato (24)&numsp;6:00    Am</option>
                                                <option value="6.5">formato (12)&numsp;6:30&numsp;    formato (24)&numsp;6:30    Am</option>
                                                <option value="7">formato (12)&numsp;7:00&numsp;    formato (24)&numsp;7:00    Am</option>
                                                <option value="7.5">formato (12)&numsp;7:30&numsp;    formato (24)&numsp;7:30    Am</option>
                                                <option value="8">formato (12)&numsp;8:00&numsp;    formato (24)&numsp;8:00    Am</option> 
                                                <option value="8.5">formato (12)&numsp;8:30&numsp;    formato (24)&numsp;8:30    Am</option>
                                                <option value="9">formato (12)&numsp;9:00&numsp;    formato (24)&numsp;9:00    Am</option>
                                                <option value="9.5">formato (12)&numsp;9:30&numsp;    formato (24)&numsp;9:30    Am</option>
                                                <option value="10">formato (12)&numsp;10:00&numsp;   formato (24)&numsp;10:00   Am</option>
                                                <option value="10.5">formato (12)&numsp;10:30&numsp;   formato (24)&numsp;10:30   Am</option>
                                                <option value="11">formato (12)&numsp;11:00&numsp;   formato (24)&numsp;11:00   Am</option>
                                                <option value="11.5">formato (12)&numsp;11:30&numsp;   formato (24)&numsp;11:30   Am</option>
                                                <option value="12">formato (12)&numsp;12:00&numsp;   formato (24)&numsp;12:00   Pm</option>
                                                <option value="12.5">formato (12)&numsp;12:30&numsp;   formato (24)&numsp;12:30   Pm</option>
                                                <option value="13">formato (12)&numsp;1:00&numsp;    formato (24)&numsp;13:00   Pm</option>
                                                <option value="13.5">formato (12)&numsp;1:30&numsp;    formato (24)&numsp;13:30   Pm</option>
                                                <option value="14">formato (12)&numsp;2:00&numsp;    formato (24)&numsp;14:00   Pm</option>
                                                <option value="14.5">formato (12)&numsp;2:30&numsp;    formato (24)&numsp;14:30   Pm</option>
                                                <option value="15">formato (12)&numsp;3:00&numsp;    formato (24)&numsp;15:00   Pm</option>
                                                <option value="15.5">formato (12)&numsp;3:30&numsp;    formato (24)&numsp;15:30   Pm</option>
                                                <option value="16">formato (12)&numsp;4:00&numsp;    formato (24)&numsp;16:00   Pm</option>
                                                <option value="16.5">formato (12)&numsp;4:30&numsp;    formato (24)&numsp;16:30   Pm</option>
                                                <option value="17">formato (12)&numsp;5:00&numsp;    formato (24)&numsp;17:00   Pm</option>
                                                <option value="17.5">formato (12)&numsp;5:30&numsp;    formato (24)&numsp;17:30   Pm</option>
                                                <option value="18">formato (12)&numsp;6:00&numsp;    formato (24)&numsp;18:00   Pm</option>
                                                <option value="18.5">formato (12)&numsp;6:30&numsp;    formato (24)&numsp;18:30   Pm</option>
                                                <option value="19">formato (12)&numsp;7:00&numsp;    formato (24)&numsp;19:00   Pm</option>
                                                <option value="19.5">formato (12)&numsp;7:30&numsp;    formato (24)&numsp;19:30   Pm</option>
                                                <option value="20">formato (12)&numsp;8:00&numsp;    formato (24)&numsp;20:00   Pm</option>
                                                <option value="20.5">formato (12)&numsp;8:30&numsp;    formato (24)&numsp;20:30   Pm</option>
                                                <option value="21">formato (12)&numsp;9:00&numsp;    formato (24)&numsp;21:00   Pm</option>
                                                <option value="21.5">formato (12)&numsp;9:30&numsp;    formato (24)&numsp;21:30   Pm</option>
                                                <option value="22">formato (12)&numsp;10:00&numsp;   formato (24)&numsp;22:00   Pm</option>
                                                <option value="22.5">formato (12)&numsp;10:30&numsp;   formato (24)&numsp;22:30   Pm</option>
                                                <option value="23">formato (12)&numsp;11:00&numsp;   formato (24)&numsp;23:00   Pm</option>
                                                <option value="23.5">formato (12)&numsp;11:30&numsp;   formato (24)&numsp;23:30   Pm</option>



                                            </select>
                                        </div> 
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i>Usuario</span>
                                            </div>
                                            <input type="text" id="userSearch" name="userSearch" class="form-control" placeholder="Buscar por nombre , cedula , rol, Actividad o departamento"  aria-describedby="basic-addon1">
                                            <input type="hidden" id="userSearchh" name="userSearchh" />
                                        </div>
                                        <div class="searchbox msgshowbox" style="position: absolute; left: 55px; top: 145px; z-index: 3950; width: 80%;">
                                            <ul id="userSearchre" class=" cuadroresult list-group list-group-flush cuadroresult" >

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">terminando el</label>
                                            </div>
                                            <select class="custom-select" id="pcdf" name="pcdf">
                                                <option value="nd"selected>Selecionar el día de fin...</option>

                                                <option value="1">Lunes</option>
                                                <option value="2">Martes</option>
                                                <option value="3">Miercoles</option>
                                                <option value="4">Jueves</option>
                                                <option value="5">Viernes</option>
                                                <option value="6">Sabado</option>
                                                <option value="0">Domingo</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Hora fín:</label>
                                            </div>
                                            <select class="custom-select" id="pchf" name="pchf">
                                                <option value="nd"selected>Selecionar la hora inicio...</option>
                                                <option value="0">formato (12)&numsp;0:00&numsp;    formato (24)&numsp;0:00    Am</option>
                                                <option value="0.5">formato (12)&numsp;0:30&numsp;    formato (24)&numsp;0:30    Am</option>
                                                <option value="1">formato (12)&numsp;1:00&numsp;    formato (24)&numsp;1:00    Am</option>
                                                <option value="1.5">formato (12)&numsp;1:30&numsp;    formato (24)&numsp;1:30    Am</option>
                                                <option value="2">formato (12)&numsp;2:00&numsp;    formato (24)&numsp;2:00    Am</option>
                                                <option value="2.5">formato (12)&numsp;2:30&numsp;    formato (24)&numsp;2:30    Am</option>
                                                <option value="3">formato (12)&numsp;3:00&numsp;    formato (24)&numsp;3:00    Am</option>
                                                <option value="3.5">formato (12)&numsp;3:30&numsp;    formato (24)&numsp;3:30    Am</option>
                                                <option value="4">formato (12)&numsp;4:00&numsp;    formato (24)&numsp;4:00    Am</option>
                                                <option value="4.5">formato (12)&numsp;4:30&numsp;    formato (24)&numsp;4:30    Am</option>
                                                <option value="5">formato (12)&numsp;5:00&numsp;    formato (24)&numsp;5:00    Am</option>
                                                <option value="5.5">formato (12)&numsp;5:30&numsp;    formato (24)&numsp;5:30    Am</option>
                                                <option value="6">formato (12)&numsp;6:00&numsp;    formato (24)&numsp;6:00    Am</option>
                                                <option value="6.5">formato (12)&numsp;6:30&numsp;    formato (24)&numsp;6:30    Am</option>
                                                <option value="7">formato (12)&numsp;7:00&numsp;    formato (24)&numsp;7:00    Am</option>
                                                <option value="7.5">formato (12)&numsp;7:30&numsp;    formato (24)&numsp;7:30    Am</option>
                                                <option value="8">formato (12)&numsp;8:00&numsp;    formato (24)&numsp;8:00    Am</option> 
                                                <option value="8.5">formato (12)&numsp;8:30&numsp;    formato (24)&numsp;8:30    Am</option>
                                                <option value="9">formato (12)&numsp;9:00&numsp;    formato (24)&numsp;9:00    Am</option>
                                                <option value="9.5">formato (12)&numsp;9:30&numsp;    formato (24)&numsp;9:30    Am</option>
                                                <option value="10">formato (12)&numsp;10:00&numsp;   formato (24)&numsp;10:00   Am</option>
                                                <option value="10.5">formato (12)&numsp;10:30&numsp;   formato (24)&numsp;10:30   Am</option>
                                                <option value="11">formato (12)&numsp;11:00&numsp;   formato (24)&numsp;11:00   Am</option>
                                                <option value="11.5">formato (12)&numsp;11:30&numsp;   formato (24)&numsp;11:30   Am</option>
                                                <option value="12">formato (12)&numsp;12:00&numsp;   formato (24)&numsp;12:00   Pm</option>
                                                <option value="12.5">formato (12)&numsp;12:30&numsp;   formato (24)&numsp;12:30   Pm</option>
                                                <option value="13">formato (12)&numsp;1:00&numsp;    formato (24)&numsp;13:00   Pm</option>
                                                <option value="13.5">formato (12)&numsp;1:30&numsp;    formato (24)&numsp;13:30   Pm</option>
                                                <option value="14">formato (12)&numsp;2:00&numsp;    formato (24)&numsp;14:00   Pm</option>
                                                <option value="14.5">formato (12)&numsp;2:30&numsp;    formato (24)&numsp;14:30   Pm</option>
                                                <option value="15">formato (12)&numsp;3:00&numsp;    formato (24)&numsp;15:00   Pm</option>
                                                <option value="15.5">formato (12)&numsp;3:30&numsp;    formato (24)&numsp;15:30   Pm</option>
                                                <option value="16">formato (12)&numsp;4:00&numsp;    formato (24)&numsp;16:00   Pm</option>
                                                <option value="16.5">formato (12)&numsp;4:30&numsp;    formato (24)&numsp;16:30   Pm</option>
                                                <option value="17">formato (12)&numsp;5:00&numsp;    formato (24)&numsp;17:00   Pm</option>
                                                <option value="17.5">formato (12)&numsp;5:30&numsp;    formato (24)&numsp;17:30   Pm</option>
                                                <option value="18">formato (12)&numsp;6:00&numsp;    formato (24)&numsp;18:00   Pm</option>
                                                <option value="18.5">formato (12)&numsp;6:30&numsp;    formato (24)&numsp;18:30   Pm</option>
                                                <option value="19">formato (12)&numsp;7:00&numsp;    formato (24)&numsp;19:00   Pm</option>
                                                <option value="19.5">formato (12)&numsp;7:30&numsp;    formato (24)&numsp;19:30   Pm</option>
                                                <option value="20">formato (12)&numsp;8:00&numsp;    formato (24)&numsp;20:00   Pm</option>
                                                <option value="20.5">formato (12)&numsp;8:30&numsp;    formato (24)&numsp;20:30   Pm</option>
                                                <option value="21">formato (12)&numsp;9:00&numsp;    formato (24)&numsp;21:00   Pm</option>
                                                <option value="21.5">formato (12)&numsp;9:30&numsp;    formato (24)&numsp;21:30   Pm</option>
                                                <option value="22">formato (12)&numsp;10:00&numsp;   formato (24)&numsp;22:00   Pm</option>
                                                <option value="22.5">formato (12)&numsp;10:30&numsp;   formato (24)&numsp;22:30   Pm</option>
                                                <option value="23">formato (12)&numsp;11:00&numsp;   formato (24)&numsp;23:00   Pm</option>
                                                <option value="23.5">formato (12)&numsp;11:30&numsp;   formato (24)&numsp;23:30   Pm</option>



                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-plus-square"></i> Agregar acceso a la caja</button>
                                    </div>

                                </div>

                            </form>




                        </div>
                        <ul>
                            <li class="itembox" ><i class="fas fa-clipboard-check" ></i>&numsp;Pueden Exitir más de un usuario a una misma hora y localidad.</li>
                            <li class="itembox" ><i class="fas fa-clipboard-check" ></i>&numsp;Usuarios que no tengan el rol con <strong>privilegio para la seccion de facturar</strong> aunque tengan asiganda una caja <strong>no podran</strong> acceder.</li>
                            <li class="itembox" ><i class="fas fa-clipboard-check" ></i>&numsp;Solo usuarios con privilegios asignados pueden dar altas o bajas.</li>
                            <li class="itembox" ><i class="fas fa-clipboard-check" ></i>&numsp;No se eliminará ningún dato vinculado con este usuario de los registros. </li>
                        </ul>

                        <div style="margin-top:35px; margin-bottom: 25px; background-color: whitesmoke; margin-left: 15px; margin-right: 15px;">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col"><strong>#</strong></th>
                                        <th scope="col"><i class="fas fa-calendar-alt"></i> Desde el:</th>
                                        <th scope="col"><i class="fas fa-clock"></i> a las:</th>
                                        <th scope="col"><i class="fas fa-calendar-times"></i> Hasta al:</th>
                                        <th scope="col"><i class="fas fa-stopwatch"></i > a las:</th>
                                        <th scope="col"><i class="fas fa-user"></i> Nombre</th>
                                        <th scope="col"><img src="../compPlanilla/iconos/pla_Departamento.png" width="25px" height="25px;"/> Departamento</th>
                                        <th scope="col"><img src="../compPlanilla/iconos/pla_Actividad.png" width="25px" height="25px;"/> Actividad</th>
                                        <th scope="col"><img src="../compSistema/iconos/sis_Role.png" width="25px" height="25px;"/> Role</th>
                                        <th scope="col"><i class="fas fa-sliders-h"></i> Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="cajasAccesos">


                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="cjm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modificar día y hora de asignación.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Empezando el:</label>
                            </div>
                            <select class="custom-select" id="mpcdi" name="mpcdi">
                                <option value="nd"selected>Selecionar el día de inicio...</option>

                                <option value="1">Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miercoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sabado</option>
                                <option value="0">Domingo</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Hora inico:</label>
                            </div>
                            <select class="custom-select" id="mpchi" name="mpchi">
                                <option value="nd"selected>Selecionar la hora inicio...</option>
                                <option value="0">formato (12)&numsp;0:00&numsp;    formato (24)&numsp;0:00    Am</option>
                                <option value="0.5">formato (12)&numsp;0:30&numsp;    formato (24)&numsp;0:30    Am</option>
                                <option value="1">formato (12)&numsp;1:00&numsp;    formato (24)&numsp;1:00    Am</option>
                                <option value="1.5">formato (12)&numsp;1:30&numsp;    formato (24)&numsp;1:30    Am</option>
                                <option value="2">formato (12)&numsp;2:00&numsp;    formato (24)&numsp;2:00    Am</option>
                                <option value="2.5">formato (12)&numsp;2:30&numsp;    formato (24)&numsp;2:30    Am</option>
                                <option value="3">formato (12)&numsp;3:00&numsp;    formato (24)&numsp;3:00    Am</option>
                                <option value="3.5">formato (12)&numsp;3:30&numsp;    formato (24)&numsp;3:30    Am</option>
                                <option value="4">formato (12)&numsp;4:00&numsp;    formato (24)&numsp;4:00    Am</option>
                                <option value="4.5">formato (12)&numsp;4:30&numsp;    formato (24)&numsp;4:30    Am</option>
                                <option value="5">formato (12)&numsp;5:00&numsp;    formato (24)&numsp;5:00    Am</option>
                                <option value="5.5">formato (12)&numsp;5:30&numsp;    formato (24)&numsp;5:30    Am</option>
                                <option value="6">formato (12)&numsp;6:00&numsp;    formato (24)&numsp;6:00    Am</option>
                                <option value="6.5">formato (12)&numsp;6:30&numsp;    formato (24)&numsp;6:30    Am</option>
                                <option value="7">formato (12)&numsp;7:00&numsp;    formato (24)&numsp;7:00    Am</option>
                                <option value="7.5">formato (12)&numsp;7:30&numsp;    formato (24)&numsp;7:30    Am</option>
                                <option value="8">formato (12)&numsp;8:00&numsp;    formato (24)&numsp;8:00    Am</option> 
                                <option value="8.5">formato (12)&numsp;8:30&numsp;    formato (24)&numsp;8:30    Am</option>
                                <option value="9">formato (12)&numsp;9:00&numsp;    formato (24)&numsp;9:00    Am</option>
                                <option value="9.5">formato (12)&numsp;9:30&numsp;    formato (24)&numsp;9:30    Am</option>
                                <option value="10">formato (12)&numsp;10:00&numsp;   formato (24)&numsp;10:00   Am</option>
                                <option value="10.5">formato (12)&numsp;10:30&numsp;   formato (24)&numsp;10:30   Am</option>
                                <option value="11">formato (12)&numsp;11:00&numsp;   formato (24)&numsp;11:00   Am</option>
                                <option value="11.5">formato (12)&numsp;11:30&numsp;   formato (24)&numsp;11:30   Am</option>
                                <option value="12">formato (12)&numsp;12:00&numsp;   formato (24)&numsp;12:00   Pm</option>
                                <option value="12.5">formato (12)&numsp;12:30&numsp;   formato (24)&numsp;12:30   Pm</option>
                                <option value="13">formato (12)&numsp;1:00&numsp;    formato (24)&numsp;13:00   Pm</option>
                                <option value="13.5">formato (12)&numsp;1:30&numsp;    formato (24)&numsp;13:30   Pm</option>
                                <option value="14">formato (12)&numsp;2:00&numsp;    formato (24)&numsp;14:00   Pm</option>
                                <option value="14.5">formato (12)&numsp;2:30&numsp;    formato (24)&numsp;14:30   Pm</option>
                                <option value="15">formato (12)&numsp;3:00&numsp;    formato (24)&numsp;15:00   Pm</option>
                                <option value="15.5">formato (12)&numsp;3:30&numsp;    formato (24)&numsp;15:30   Pm</option>
                                <option value="16">formato (12)&numsp;4:00&numsp;    formato (24)&numsp;16:00   Pm</option>
                                <option value="16.5">formato (12)&numsp;4:30&numsp;    formato (24)&numsp;16:30   Pm</option>
                                <option value="17">formato (12)&numsp;5:00&numsp;    formato (24)&numsp;17:00   Pm</option>
                                <option value="17.5">formato (12)&numsp;5:30&numsp;    formato (24)&numsp;17:30   Pm</option>
                                <option value="18">formato (12)&numsp;6:00&numsp;    formato (24)&numsp;18:00   Pm</option>
                                <option value="18.5">formato (12)&numsp;6:30&numsp;    formato (24)&numsp;18:30   Pm</option>
                                <option value="19">formato (12)&numsp;7:00&numsp;    formato (24)&numsp;19:00   Pm</option>
                                <option value="19.5">formato (12)&numsp;7:30&numsp;    formato (24)&numsp;19:30   Pm</option>
                                <option value="20">formato (12)&numsp;8:00&numsp;    formato (24)&numsp;20:00   Pm</option>
                                <option value="20.5">formato (12)&numsp;8:30&numsp;    formato (24)&numsp;20:30   Pm</option>
                                <option value="21">formato (12)&numsp;9:00&numsp;    formato (24)&numsp;21:00   Pm</option>
                                <option value="21.5">formato (12)&numsp;9:30&numsp;    formato (24)&numsp;21:30   Pm</option>
                                <option value="22">formato (12)&numsp;10:00&numsp;   formato (24)&numsp;22:00   Pm</option>
                                <option value="22.5">formato (12)&numsp;10:30&numsp;   formato (24)&numsp;22:30   Pm</option>
                                <option value="23">formato (12)&numsp;11:00&numsp;   formato (24)&numsp;23:00   Pm</option>
                                <option value="23.5">formato (12)&numsp;11:30&numsp;   formato (24)&numsp;23:30   Pm</option>



                            </select>
                        </div> 
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">terminando el</label>
                            </div>
                            <select class="custom-select" id="mpcdf" name="mpcdf">
                                <option value="nd"selected>Selecionar el día de fin...</option>

                                <option value="1">Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miercoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sabado</option>
                                <option value="0">Domingo</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Hora fín:</label>
                            </div>
                            <select class="custom-select" id="mpchf" name="mpchf">
                                <option value="nd"selected>Selecionar la hora inicio...</option>
                                <option value="0">formato (12)&numsp;0:00&numsp;    formato (24)&numsp;0:00    Am</option>
                                <option value="0.5">formato (12)&numsp;0:30&numsp;    formato (24)&numsp;0:30    Am</option>
                                <option value="1">formato (12)&numsp;1:00&numsp;    formato (24)&numsp;1:00    Am</option>
                                <option value="1.5">formato (12)&numsp;1:30&numsp;    formato (24)&numsp;1:30    Am</option>
                                <option value="2">formato (12)&numsp;2:00&numsp;    formato (24)&numsp;2:00    Am</option>
                                <option value="2.5">formato (12)&numsp;2:30&numsp;    formato (24)&numsp;2:30    Am</option>
                                <option value="3">formato (12)&numsp;3:00&numsp;    formato (24)&numsp;3:00    Am</option>
                                <option value="3.5">formato (12)&numsp;3:30&numsp;    formato (24)&numsp;3:30    Am</option>
                                <option value="4">formato (12)&numsp;4:00&numsp;    formato (24)&numsp;4:00    Am</option>
                                <option value="4.5">formato (12)&numsp;4:30&numsp;    formato (24)&numsp;4:30    Am</option>
                                <option value="5">formato (12)&numsp;5:00&numsp;    formato (24)&numsp;5:00    Am</option>
                                <option value="5.5">formato (12)&numsp;5:30&numsp;    formato (24)&numsp;5:30    Am</option>
                                <option value="6">formato (12)&numsp;6:00&numsp;    formato (24)&numsp;6:00    Am</option>
                                <option value="6.5">formato (12)&numsp;6:30&numsp;    formato (24)&numsp;6:30    Am</option>
                                <option value="7">formato (12)&numsp;7:00&numsp;    formato (24)&numsp;7:00    Am</option>
                                <option value="7.5">formato (12)&numsp;7:30&numsp;    formato (24)&numsp;7:30    Am</option>
                                <option value="8">formato (12)&numsp;8:00&numsp;    formato (24)&numsp;8:00    Am</option> 
                                <option value="8.5">formato (12)&numsp;8:30&numsp;    formato (24)&numsp;8:30    Am</option>
                                <option value="9">formato (12)&numsp;9:00&numsp;    formato (24)&numsp;9:00    Am</option>
                                <option value="9.5">formato (12)&numsp;9:30&numsp;    formato (24)&numsp;9:30    Am</option>
                                <option value="10">formato (12)&numsp;10:00&numsp;   formato (24)&numsp;10:00   Am</option>
                                <option value="10.5">formato (12)&numsp;10:30&numsp;   formato (24)&numsp;10:30   Am</option>
                                <option value="11">formato (12)&numsp;11:00&numsp;   formato (24)&numsp;11:00   Am</option>
                                <option value="11.5">formato (12)&numsp;11:30&numsp;   formato (24)&numsp;11:30   Am</option>
                                <option value="12">formato (12)&numsp;12:00&numsp;   formato (24)&numsp;12:00   Pm</option>
                                <option value="12.5">formato (12)&numsp;12:30&numsp;   formato (24)&numsp;12:30   Pm</option>
                                <option value="13">formato (12)&numsp;1:00&numsp;    formato (24)&numsp;13:00   Pm</option>
                                <option value="13.5">formato (12)&numsp;1:30&numsp;    formato (24)&numsp;13:30   Pm</option>
                                <option value="14">formato (12)&numsp;2:00&numsp;    formato (24)&numsp;14:00   Pm</option>
                                <option value="14.5">formato (12)&numsp;2:30&numsp;    formato (24)&numsp;14:30   Pm</option>
                                <option value="15">formato (12)&numsp;3:00&numsp;    formato (24)&numsp;15:00   Pm</option>
                                <option value="15.5">formato (12)&numsp;3:30&numsp;    formato (24)&numsp;15:30   Pm</option>
                                <option value="16">formato (12)&numsp;4:00&numsp;    formato (24)&numsp;16:00   Pm</option>
                                <option value="16.5">formato (12)&numsp;4:30&numsp;    formato (24)&numsp;16:30   Pm</option>
                                <option value="17">formato (12)&numsp;5:00&numsp;    formato (24)&numsp;17:00   Pm</option>
                                <option value="17.5">formato (12)&numsp;5:30&numsp;    formato (24)&numsp;17:30   Pm</option>
                                <option value="18">formato (12)&numsp;6:00&numsp;    formato (24)&numsp;18:00   Pm</option>
                                <option value="18.5">formato (12)&numsp;6:30&numsp;    formato (24)&numsp;18:30   Pm</option>
                                <option value="19">formato (12)&numsp;7:00&numsp;    formato (24)&numsp;19:00   Pm</option>
                                <option value="19.5">formato (12)&numsp;7:30&numsp;    formato (24)&numsp;19:30   Pm</option>
                                <option value="20">formato (12)&numsp;8:00&numsp;    formato (24)&numsp;20:00   Pm</option>
                                <option value="20.5">formato (12)&numsp;8:30&numsp;    formato (24)&numsp;20:30   Pm</option>
                                <option value="21">formato (12)&numsp;9:00&numsp;    formato (24)&numsp;21:00   Pm</option>
                                <option value="21.5">formato (12)&numsp;9:30&numsp;    formato (24)&numsp;21:30   Pm</option>
                                <option value="22">formato (12)&numsp;10:00&numsp;   formato (24)&numsp;22:00   Pm</option>
                                <option value="22.5">formato (12)&numsp;10:30&numsp;   formato (24)&numsp;22:30   Pm</option>
                                <option value="23">formato (12)&numsp;11:00&numsp;   formato (24)&numsp;23:00   Pm</option>
                                <option value="23.5">formato (12)&numsp;11:30&numsp;   formato (24)&numsp;23:30   Pm</option>



                            </select>
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="off" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <input type="hidden" name="mcid" id="mcid" />
                        <button type="button" id="btnchm" name="btnchm" class="btn btn-primary">Modificar</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="../lib/jquery/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../lib/animation/js/animation.js" ></script>
        <script src="../lib/alertifyjs/js/alertify.js" ></script>

        <script src="controler/cajaGetUser.js" ></script>
        <script src="controler/CAJAACCESOupdate.js" ></script>
        <script src="controler/CAJAACCESOinsert.js" ></script>
        <script src="controler/CAJACCESOgetAll.js" ></script>
         <script src="../comps/js/showinfo.js" ></script>


    </body>
</html>
