

function getAllCajas() {

$.ajax({
url: "model/cajasGetAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {

        var datosrespuesta = respuesta.resultados;
                $("#listacajas").empty();
                $.each(datosrespuesta, function (i, item) {



                $("#listacajas").append('<div class="card" style="width: 11rem; display: inline-block">\n\
                                            <center> <img width="82" height="82"src="iconos/cashbox.png" alt="Card image cap"></center>\n\
                                            <div class="card-body">\n\
                                                <center> <p class="card-text"><strong>' + datosrespuesta[i].caj_nb + '</strong></p> </center>\n\
                                                <center>\n\
                                                    <img src="iconos/sis_localidades.png" width="30" height="30" style="display: inline-block" />\n\
                                                    <p style="display: inline-block; font-size: 12px;" class="card-text"><strong>' + datosrespuesta[i].loc_nb + '</strong></p> </center>\n\
                                                <center> <form method="post" action="cajasConfig.php">\n\
                                              <input type="hidden" name="caid" value="' + datosrespuesta[i].caj_id + '">\n\
\n\                                           <input type="hidden" name="canb" value="' + datosrespuesta[i].caj_nb + '">\n\
\n\                                           <input type="hidden" name="calo" value="' + datosrespuesta[i].loc_nb + '">\n\
                                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-cogs"></i> Configurar</button>\n\
                                                        </form> </center>\n\
                                                    </div>\n\
                                                     </div>');
});
},
error: function () {

                        alert("Ocurrio un error en la llamada Ajax Er:cod 255");
}
});

}

$(document).ready(function () {

                        getAllCajas();
});
