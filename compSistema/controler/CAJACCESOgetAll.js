function getAllUserByCaja() {

    $.ajax({
        url: "model/CAJAACCESOgetAll.php",
        type: 'POST',
        dataType: "json",
        data: {ca: $("#cjid").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#cajasAccesos").empty();
            $tam = 0;
            $.each(datosrespuesta, function (i, item) {
                $tam++;
                $dayi = rDay(datosrespuesta[i].dia_ini);
                $dayf = rDay(datosrespuesta[i].dia_fin);
                $hoi = rhora(datosrespuesta[i].hora_ini);
                $hof = rhora(datosrespuesta[i].hora_fin);
                $("#cajasAccesos").append('<tr>\n\
                                        <th scope="row">' + $tam + '</th>\n\
                                        <td>' + $dayi + '</td>\n\
                                        <td>' + $hoi + '</td>\n\
                                        <td>' + $dayf + '</td>\n\
                                        <td>' + $hof +'</td>\n\
                                        <td>Gabriel Quesada Sanchez</td>\n\
                                        <td>Sistema</td>\n\
                                        <td>Sistema</td>\n\
                                        <td>Sistema</td>\n\
                                        <td>\n\
                                            <div class="btn-group btn-group-sm" role="group" aria-label="...">\n\
                                                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>\n\
                                                <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Modificar</button>\n\
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