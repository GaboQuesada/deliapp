function getAllUserByCaja() {

    $.ajax({
        url: "model/CAJAACCESOgetAll.php",
        type: 'POST',
        dataType: "json",
        data: {ca: $("#cjid").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var d = respuesta.resultados;
            $("#cajasAccesos").empty();
            $tam = 0;
            $.each(d, function (i, item) {
                $tam++;
                $dayi = rDay(d[i].dia_ini);
                $dayf = rDay(d[i].dia_fin);
                $hoi = rhora(d[i].hora_ini);
                $hof = rhora(d[i].hora_fin);
                $nom = d[i].pla_no + " " + d[i].pla_ap1 + "" + d[i].pla_ap2;
                $("#cajasAccesos").append('<tr>\n\
                                        <th scope="row">' + $tam + '</th>\n\
                                        <td>' + $dayi + '</td>\n\
                                        <td>' + $hoi + '</td>\n\
                                        <td>' + $dayf + '</td>\n\
                                        <td>' + $hof + '</td>\n\
                                        <td>' + $nom + '</td>\n\
                                        <td>' + d[i].dep_no + '</td>\n\
                                        <td>' + d[i].car_no + '</td>\n\
                                        <td>' + d[i].rol_no + '</td>\n\
                                        <td>\n\
                                            <div class="btn-group btn-group-sm" role="group" aria-label="...">\n\
                                                <button type="button" onclick="eliminarcajaac(\''+ d[i].id_cac +'\')" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>\n\
                                                <button type="button" onclick="putinModal(\''+ d[i].id_cac +'\',\''+ d[i].dia_ini +'\',\''+ d[i].dia_fin +'\',\''+ d[i].hora_ini +'\',\''+ d[i].hora_fin +'\')"class="btn btn-warning" data-toggle="modal" data-target="#cjm"><i class="fas fa-edit"></i> Modificar</button>\n\
                                            </div>\n\
                                        </td>\n\
                                    </tr>');
            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });

}

$(document).ready(function () {

    getAllUserByCaja();

});

function rDay(day) {

    switch (day) {
        case "0":
            return "Domingo";
            break;
        case "1":
            return "Lunes";
            break;
        case "2":
            return "Martes";
            break;
        case "3":
            return "Miercoles";
            break;
        case "4":
            return "Jueves";
            break;
        case "5":
            return "Viernes";
            break;
        case "6":
            return "Sabado";
            break;


    }

}

function rhora(hour) {


    var tamn = hour.length;

    if (tamn >= 3) {

        var res = hour.split(".");

        if (res[0] > 12) {
            $re = res[0] - 12;
            return $re + ":30 pm";
        } else {
            return  res[0] + ":30 am";
        }


    } else {

        if (hour > 12) {
            $re = hour - 12;
            return $re + ":00 pm";
        } else {
            return  hour + ":00 am";
        }

    }

}

function eliminarcajaac(pid) {
    alertify.confirm('el acceso se Eliminara', 'Recuerde que sin un horario asiganado la persona no podra acceder.', function () {


        $.ajax({
            url: "model/CAJAACCESOeliminar.php",
            type: 'POST',
            dataType: "json",
            data: {id:pid},
            beforeSend: function () {

            },
            success: function (respuesta) {
                alertify.success('Eliminado correctamente');
                getAllUserByCaja();

            },
            error: function () {

            }
        });

    }
    , function () {
        alertify.error('Cancel')
    });



}

function putinModal(cid,di,df,hi,hf){
    
    $("#mpcdi").val(di);
    $("#mpchi").val(hi);
    $("#mpcdf").val(df);
    $("#mpchf").val(hf);
    $("#mcid").val(cid);
    
}


