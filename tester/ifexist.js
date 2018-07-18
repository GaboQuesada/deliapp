

function login() {

        $.ajax({
            url: "Exist.php",
            type: 'POST',
            dataType: "json",
            data: {us: $("#nb").val(), pa: $("#pb").val()},
            beforeSend: function () {

               

            },
            success: function (respuesta) {

                var existe = respuesta.resultados;

                if (existe == 0) {
                   
                    alert("incorrectos")
                } else {

                   
                }
            },
            error: function () {
                alert("fallo 1");
            }
        });


    }


$(document).ready(function () {

 

    $("#btnconec").click(function () {
   
        login();

    });

});