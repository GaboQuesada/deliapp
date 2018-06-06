


function showr(pini,fini) {

   
    
   
    $.ajax({
        url: "getLimit.php",
        type: 'POST',
        dataType: "json",
        data: {ini: pini, fin: fini},
        beforeSend: function () {

        },
        success: function (respuesta) {

            var tam;
            var datosrespuesta = respuesta.resultados;
            $("#resultados").empty();
            $.each(datosrespuesta, function (i, item) {
                
                tam = tam + 1;
                $("#resultados").append('<tr><td scope="col">' + datosrespuesta[i].pla_ce + '</td>\n\
<td scope="col">' + datosrespuesta[i].pla_no + ' ' + datosrespuesta[i].pla_ap1 + ' ' + datosrespuesta[i].pla_ap2 + '</td>\n\
<td scope="col">' + datosrespuesta[i].dep_no + '</td>\n\
<td scope="col">' + datosrespuesta[i].car_no + '</td>\n\
<td scope="col">\n\
</tr>');
            });
        },
        error: function () {

        }
    });
}


    
    
    $(document).ready(function (){
        
        showr(0,10);
         alert("PASO 5 SHOW jaja");
    })

