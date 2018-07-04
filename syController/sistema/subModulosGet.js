

// rl nombre del roll
// bid dela lista donde se agregara el la info
function getSubModulosByModulo(nr, id , paraclick) {



    $.ajax({
        url: "../syModel/submodulo/getBYModulo.php",
        type: 'POST',
        dataType: "json",
        data: {pmo: nr},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#" + id).empty();
            $.each(datosrespuesta, function (i, item) {

                getPermiso(datosrespuesta[i].sbm_im, datosrespuesta[i].sbm_no, datosrespuesta[i].sbm_id, id, paraclick);


            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    }
    );
}



function getPermiso(img, nb, smid, idul , forclick) {

    $.ajax({
        url: "../syModel/submodulo/getByPermisoRolSub.php",
        type: 'POST',
        dataType: "json",
        data: {sp: smid, rp: $("#rolid").val()},
        beforeSend: function () {
//$('#div_cargax').show();
        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;



            if (datosrespuesta == 1) {
                $("#" + idul).append(' <li onclick="setAcces(\'' + smid + '\',\'' + forclick + '\')" class="list-group-item miitem" > \n\
                                    <div class="col-lg-7" style="display: inline-block; "><img src="../img/iconos/' + img + '" width="50" height="50" />' + nb + '</div> \n\
                                    <div class="col-lg-4" style="display: inline-block"> Estado:    <i class="fas fa-check-circle" style="font-size: 30px; color: green;"></i> </div></li> \n\
                                ');
            } else {
                $("#" + idul).append(' \n\
                                <li onclick="setAcces(\'' + smid + '\',\'' + forclick + '\')" class="list-group-item miitem"> \n\
                                    <div class="col-lg-7" style="display: inline-block; "><img src="../img/iconos/' + img + '" width="50" height="50" >' + nb + '</div> \n\
                                    <div class="col-lg-4" style="display: inline-block"> Estado:     <i class="fas fa-ban"  style="font-size: 30px; color: red;"></i> </div></li>');

            }


            // $('#div_cargax').hide();

        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    }
    );

}
