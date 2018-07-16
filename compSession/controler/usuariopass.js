

function pass(nb, pb) {

    $.ajax({
        url: "model/obtpase.php",
        type: 'POST',
        dataType: "json",
        data: {us: nb, pa: pb},
        beforeSend: function () {



        },
        success: function (respuesta) {
            
            location.href = "lobby.php";

        },
        error: function () {
            alert("fallo 1");
        }
    });
   
}
