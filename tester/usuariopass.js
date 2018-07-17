
function pass(nb, pb) {


 
    $.ajax({
         url: "starService.php",
        type: 'POST',
        dataType: "json",
        data: {us: nb, pa: pb},
        beforeSend: function () {



        },
        success: function (respuesta) {
            
                   location.href = "sesiones.php";

        },
        error: function () {
            alert("fallo 1");
        }
    });
   
}




