
//async: false, 
$(document).ready(function () {

  
    $("#fileinfo").submit(function (e) {
        e.preventDefault();

        var objform = $("#fileinfo");
        var datos = new FormData(document.getElementById("fileinfo"));
        datos.append("action","insert");

        $.ajax({
            url: "model/model.php",
            type: "POST",
            data: datos,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function () {

            },
            success: function (response) {
               
              if (response.success) {
                
                var outpuct =  response.nombre;
                        alert(outpuct);
                        }
            },
            error: function () {

            }
        });

    });

});


