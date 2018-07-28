
function setRoleInfo(nb, de, rid) {



    $("#rolsetnb").val(nb);
    $("#rolsetde").val(de);
    $("#rolid").val(rid);
    $("#labelrol").text(nb);
    $("#boxinfoshowrole").show();
    $("#boxalert").hide();

    $.ajax({
        url: "../syModel/modulo/getAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#accordion").empty();

            tam = 0;
            $.each(datosrespuesta, function (i, item) {


                if (datosrespuesta[i].ses_et === 'ct') {

                    $("#accordion").append('\n\
       <div class="card">\n\
                    <div class="card-header" id="headingOne' + tam + '">\n\
<div id="clicker' + tam + '" onclick="getSubModulosByModulo(\'' + datosrespuesta[i].ses_no + '\',\'showSubmodulos' + tam + datosrespuesta[i].ses_no + '\',\'clicker' + tam + '\')"  data-toggle="collapse" data-target="#collapseOne' + tam + '" aria-expanded="true" aria-controls="collapseOne">\n\
                               <a class=" mibox row  "  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">\n\
                            <div class="col-lg" style="padding-left: 45px;">\n\
                                <i class="material-icons" style="font-size: 60px;">' + datosrespuesta[i].ses_im + '</i>\n\
                            </div>\n\
                            <div class="col-lg align-self-center">\n\
                               ' + datosrespuesta[i].ses_no + '\n\
                            </div>\n\
                            <div class="col-lg">\n\
                            </div>\n\
                        </a>\n\
                            </div>\n\
                    </div>\n\
                    <div id="collapseOne' + tam + '" class="collapse " aria-labelledby="headingOne' + tam + '" data-parent="#accordion"> \n\
                        <div class="card-body"> \n\
                            <ul class="list-group" id="showSubmodulos' + tam + '' + datosrespuesta[i].ses_no + '"> \n\
                                \n\
                            </ul> \n\
                        </div> \n\
                    </div>\n\
                </div>\n\
                ');
                    //

                    tam = tam + 1;
                }



            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });




}

$(document).ready(function () {
    $("#boxinfoshowrole").hide();
    $("#boxalert").show();
});