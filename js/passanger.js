
function goWs(){
 $.ajax({
            url: "model/usuarioPassCheckCount.php",
            type: 'POST',
            dataType: "json",
            data: {us: $("#nb").val(), pa: $("#pb").val()},
            beforeSend: function () {

                $('#div_carga').show();

            },
            success: function (respuesta) {
                

            },
            error: function () {

            }
        });

}
