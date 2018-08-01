

function showinf(nb,des){
    
    
    $("#exampleModalLongTitle").text(nb);
    $("#modes").text(des);
       $.ajax({
        url: "../syModel/submodulo/getBYModulo.php",
        type: 'POST',
        dataType: "json",
        data: {pmo: nr},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            
            $.each(datosrespuesta, function (i, item) {

                getPermiso(datosrespuesta[i].sbm_im, datosrespuesta[i].sbm_no, datosrespuesta[i].sbm_id, id, paraclick);

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
      
}





