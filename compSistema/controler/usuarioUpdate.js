function readURLModificaUMD(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imgshow')
                    .attr('src', e.target.result)
                    .width(350)
                    .height(180);
        };
        reader.readAsDataURL(input.files[0]);
    }
}


$(document).ready(function () {

    $("#mnewcashbox").submit(function (e) {
        e.preventDefault();
       
        var objform = $("#mnewcashbox");
        var datos = new FormData(document.getElementById("mnewcashbox"));


        $.ajax({
            url: "model/usuarioUpdate.php",
            type: "POST",
            data: datos,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function () {

            },
            success: function (data) {

                $("#mdmucl").click();
                getAllUser();



            },
            error: function () {

                alert("Error del servidor ert");
            }
        });

    });


});