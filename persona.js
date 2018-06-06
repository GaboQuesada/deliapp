


function showr(pini,fini) {

   
    
   
    $.ajax({
        url: "getLimit.php",
        type: 'POST',
        dataType: "json",
        data: {ini: pini, fin: fini},
        beforeSend: function () {

        },
        success: function (respuesta) {

            var datosrespuesta = respuesta.resultados;
            $("#resultados").empty();
            $.each(datosrespuesta, function (i, item) {
                
    
                $("#resultados").append('\
<tr>\n\
<td scope="col">' + datosrespuesta[i].pla_ce + '</td>\n\
<td scope="col">' + datosrespuesta[i].pla_no + ' ' + datosrespuesta[i].pla_ap1 + ' ' + datosrespuesta[i].pla_ap2 + '</td>\n\
<td scope="col">' + datosrespuesta[i].dep_no + '</td>\n\
<td scope="col">' + datosrespuesta[i].car_no + '</td>\n\
</tr>');
            });
        },
        error: function () {

        }
    });
}


    
    
    $(document).ready(function (){
        
        showr(0,10);
         alert("PASO 6 SHOW jaja");
    });

