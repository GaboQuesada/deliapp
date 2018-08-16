

$(document).ready(function () {

    alert("listp");

    $("#fileinfo").submit(function (e) {
        e.preventDefault();

        alert("k");
        var objform = $("#fileinfo");
        var datos = new FormData(document.getElementById("fileinfo"));
        datos.append("action", "insert");

        $.ajax({
            url: "model/Localidades.php",
            type: "POST",
            data: datos,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function () {

            },
            success: function (respuesta) {

               
            },
            error: function () {

            }
        });

    });

});



