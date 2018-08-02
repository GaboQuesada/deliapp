

function showinf(nb,des){
    
    
    $("#exampleModalLongTitle").text(nb);
    $("#modes").text(des);
       $.ajax({
        url: "model/SUBMODULOgetBYModulo.php",
        type: 'POST',
        dataType: "json",
        data: {pmo: nb},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
           $("#listsubmodulos").empty();
            $.each(datosrespuesta, function (i, item) {

                $("#listsubmodulos").append('<li class="list-group-item">\
                                <div class="container">\
                                    <div class="row">\
                                        <div class="col-sm-2">\
                                            <img src="../'+ datosrespuesta[i].comp +'/iconos/'+ datosrespuesta[i].sbm_im +'" width="30" height="30">\
                                        </div>\
                                        <div class="col-sm-9">\
                                            <strong><span>'+ datosrespuesta[i].sbm_no +'</span></strong>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-sm">\
                                            <span>'+ datosrespuesta[i].sbm_de +'</span>\
                                        </div>\
                                    </div>\
                                </div>\
                            </li>')


            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
    
    
    
    
    
    
}





