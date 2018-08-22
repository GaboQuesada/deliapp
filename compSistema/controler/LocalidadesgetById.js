

function morinfo(pid) {

    $.ajax({
        url: "model/LocalidadesGetById.php",
        type: 'POST',
        dataType: "json",
        data: {pid: pid},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var d = respuesta.resultados;

            $.each(d, function (i, item) {


                $("#nb").text(d[i].loc_nb);
                $("#ce").text(d[i].loc_ce);
                $("#tl").text(d[i].til_nb);
                $("#de").text(d[i].loc_de);
                $("#di").text(d[i].loc_dir);
                $("#web").text(d[i].loc_web);
                $("#co").text(d[i].loc_co);
                $("#fb").text(d[i].loc_fa);
                $("#tel").text(d[i].loc_tel);

                

                if (d[i].loc_img === null || d[i].loc_img === "") {

                    $("#imgp").empty();
                    $("#imgp").append("<img  src='../img/imagen.png' width='85' height='85'>");



                } else {
                    $("#imgp").empty();
                    $("#imgp").append("<img  src='logoslocal/" + d[i].loc_img + "' width='105' height='95'>");


                }

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });


}


