

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

                $("#listsubmodulos").empty();


            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
    
    
    
    
    
    
}





