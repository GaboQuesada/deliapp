

function activarseccion(id)
{
    var ids = ["me0", "me1", "me2", "me3", "me4"];
    for (var i = 0; i < 5; i++) {
        if (ids[i] === id) {
            $("#" + ids[i]).addClass("active");
        } else {
            $("#" + ids[i]).removeClass("active");
        };
    }
}


function hacer(pini, pfini) {  // construye la tabla y la paginacion persona

    var cantidad;
    $.ajax({
        url: "http://deliapp.tk/ws/familiagetAll.php",
        type: 'POST',
        dataType: "jsonp",
        jsonp: 'callback',
        beforeSend: function () {

        },

        success: function (respuesta) {
            //alert("29");
            var bloques = 0;
            cantidad = respuesta.resultados;

            var resultado = cantidad / 10;
            if (cantidad <= 10)
            {
                bloques = 1;
            } else if (cantidad > 10 && cantidad < 20) {
                bloques = 2;
            } else {
                bloques = Math.trunc(resultado);
            }
            $("#listapaginacion").empty();
            $("#cantreg").html('<p>Total registros:' + cantidad + ' </p>')
            var desde = 0;
            var hasta = 10;
            var contador = 0;
            for (var i = 0; i < bloques; i++) {
                contador = contador + 1;
                $("#listapaginacion").append('<li><a href="#" onclick="hacer(' + desde + ',' + hasta + ')"">' + contador + '</a></li>');
                desde = desde + 10;
            }

        },
        error: function () {

        }
    });


    $.ajax({
        url: "http://detodoexpress.net/php/instructorSelecPersonas.php",
        type: 'POST',
        dataType: "json",
        data: {ini: pini, fini: pfini},
        beforeSend: function () {

        },

        success: function (respuesta) {

            var tam;
            var datosrespuesta = respuesta.resultados;
            $("#tablaresultados").empty();
            $.each(datosrespuesta, function (i, item) {
                tam = tam + 1;
                $("#tablaresultados").append("<tr id='" + datosrespuesta[i].PER_CODIGO + "' onclick='test(" + datosrespuesta[i].PER_CODIGO + ")'><td>" + datosrespuesta[i].PER_CODIGO + "</td><td>" + datosrespuesta[i].PER_NOMBRE + "</td><td>" + datosrespuesta[i].PER_P_APELLIDO + "</td><td>" + datosrespuesta[i].PER_S_APELLIDO + "</td></tr>");

            });

        },
        error: function () {

        }
    });


}
function nada() {
    alert("hola mundo");
}

function livesearch() { // busqueda en vivo

    if ($("#txt_livesearch").val() === "") {
        hacer(0, 10);
    } else {
        $.ajax({
            url: "http://detodoexpress.net/php/instructorGetSearchLive.php",
            type: 'POST',
            dataType: "json",
            data: {busca: $("#txt_livesearch").val()},
            beforeSend: function () {

            },

            success: function (respuesta) {

                var tam;
                var datosrespuesta = respuesta.resultados;
                $("#tablaresultados").empty();
                $.each(datosrespuesta, function (i, item) {
                    tam = tam + 1;
                    $("#tablaresultados").append("<tr id='" + datosrespuesta[i].PER_CODIGO + "' onclick='test(" + datosrespuesta[i].PER_CODIGO + ")'><td>" + datosrespuesta[i].PER_CODIGO + "</td><td>" + datosrespuesta[i].PER_NOMBRE + "</td><td>" + datosrespuesta[i].PER_P_APELLIDO + "</td><td>" + datosrespuesta[i].PER_S_APELLIDO + "</td></tr>");

                });


            },
            error: function () {

            }
        });
    }
}


function test(msg) {  //obtiene un registro de la tabla y lo agrega a la tabla
    alert("Registro selecionado");
    $.ajax({
        url: "http://detodoexpress.net/php/instructorGetPersonaById.php",
        type: 'POST',
        dataType: "json",
        data: {id: msg},
        beforeSend: function () {

        },

        success: function (respuesta) {

            var tam;
            var datosrespuesta = respuesta.resultados;
            $("#tablaResultado").empty();
            $.each(datosrespuesta, function (i, item) {
                $("#tablaResultado").append("<tr><td id='tpcodigo'>" + datosrespuesta[i].PER_CODIGO + "</td><td>" + datosrespuesta[i].PER_NOMBRE + "</td><td>" + datosrespuesta[i].PER_P_APELLIDO + "</td><td>" + datosrespuesta[i].PER_S_APELLIDO + "</td></tr>");

            });


        },
        error: function () {

        }
    });

}

function VerificarInstructor() { // compruba si el instructor existe 
    var idi = $("#tpcodigo").text();
    $.ajax({
        url: "http://detodoexpress.net/php/instructorGetCountById.php",
        type: 'POST',
        dataType: "json",
        data: {id: idi},
        beforeSend: function () {

        },

        success: function (respuesta) {

            var cantidad = respuesta.resultados;

            if (cantidad == 1) {
                alert(" YA existe");
                alertify.error("Prueba con otra persona :( ");
            } else {
                AgregarInstructor(idi);

            }


        },
        error: function () {

        }
    });

}

function AgregarInstructor(id) { // agrega el instructor

    var dt = new Date();
    var month = dt.getMonth() + 1;
    var day = dt.getDate();
    var year = dt.getFullYear();
    var fecha = year + '-' + month + '-' + day;


    $.ajax({
        url: "http://detodoexpress.net/php/instructorInsert.php",
        type: 'POST',
        dataType: "json",
        data: {per_Codigo: id, ins_FechaIngreso: fecha, ins_Estado: 'A', aca_codigo: 1},
        beforeSend: function () {

        },

        success: function (respuesta) {


            alertify.success("Agregado correctamente :) ");
            hacertablaInstructores(0, 10);
            $("#tablaResultado").empty();

        },
        error: function () {

        }
    });
}
//cod, nombre, apellido, apellido2
function Update(cod) { // instructor
    alert("Selecionado");
    $("#labelinstructor").html("<mark>Instructor:</mark>" + cod + "");
    $("#pid").val(cod);
    // $("#labelinstructor").html("<mark>Instructor:</mark>"+cod+" "+nombre+" "+apellido+" "+apellido2+""); 
}

function modificaInstructor() {

    $.ajax({
        url: "http://detodoexpress.net/php/instructorUpdate.php",
        type: 'POST',
        dataType: "json",
        data: {pestado: $("#selecEstado").val(), pid: $("#pid").val()},
        beforeSend: function () {

        },

        success: function (respuesta) {

            alertify.success("Modificado correctamente :) ");
            hacertablaInstructores(0, 10);

        },
        error: function () {

        }
    });
}

function hacertablaInstructores(pini, pfini) {  // construye la tabla y la paginacion persona

    var cantidad;
    $.ajax({
        url: "http://detodoexpress.net/php/instructorGetCountInstructor.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },

        success: function (respuesta) {
            //alert("29");
            var bloques = 0;
            cantidad = respuesta.resultados;

            var resultado = cantidad / 10;
            if (cantidad <= 10)
            {
                bloques = 1;
            } else if (cantidad > 10 && cantidad < 20) {
                bloques = 2;
            } else {
                bloques = Math.trunc(resultado);
            }
            $("#listapaginacioninstructor").empty();
            $("#cantreginstructor").html('<p>Total registros:' + cantidad + ' </p>')
            var desde = 0;
            var hasta = 10;
            var contador = 0;
            for (var i = 0; i < bloques; i++) {
                contador = contador + 1;
                $("#listapaginacioninstructor").append('<li><a href="#" onclick="hacertablaInstructores(' + desde + ',' + hasta + ')"">' + contador + '</a></li>');
                desde = desde + 10;
            }

        },
        error: function () {

        }
    });


    $.ajax({
        url: "http://detodoexpress.net/php/instructorselectInstructores.php",
        type: 'POST',
        dataType: "json",
        data: {ini: pini, fini: pfini},
        beforeSend: function () {

        },

        success: function (respuesta) {

            var tam;
            var datosrespuesta = respuesta.resultados;
            $("#tablaresultadosinstructor").empty();
            $.each(datosrespuesta, function (i, item) {
                tam = tam + 1;
                $("#tablaresultadosinstructor").append('<tr>\n\
                                                            <td>' + datosrespuesta[i].PER_CODIGO + '</td>\n\
                                                            <td>' + datosrespuesta[i].PER_NOMBRE + '</td>\n\
                                                            <td>' + datosrespuesta[i].PER_P_APELLIDO + '</td>\n\
                                                            <td>' + datosrespuesta[i].PER_S_APELLIDO + '</td>\n\
                                                            <td>' + datosrespuesta[i].INS_FECHAINGRESO + '</td>\n\
                                                            <td>' + datosrespuesta[i].INS_ESTADO + '</td>\n\
                                                            <td>' + datosrespuesta[i].ACA_CODIGO + '</td>\n\
                                                            <td><button onclick="Update(' + datosrespuesta[i].PER_CODIGO + ')" class=" btn btn-sm btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModalupdateinstructor" ></button> <button onclick="preguntarSiNo(' + datosrespuesta[i].PER_CODIGO + ')" class=" btn btn-sm btn-danger glyphicon glyphicon-remove  "></button></td></tr>');

            });

        },
        error: function () {

        }
    });


}

function preguntarSiNo(id)
{
    $.ajax({
        url: "http://detodoexpress.net/php/instructorDelete.php",
        type: 'POST',
        dataType: "json",
        data: {per_Codigo: id},
        beforeSend: function () {

        },

        success: function (respuesta) {
            alertify.success("Eliminado correctamente :) ");
            hacertablaInstructores(0, 10);

        },
        error: function () {

        }
    });

}


$(document).ready(function () {

    hacertablaInstructores(0, 10);

});


function livesearchinstructor() { // busqueda en vivo

    if ($("#buscaInstructor").val() === "") {
        hacertablaInstructores(0, 10);
    } else {
        $.ajax({
            url: "http://detodoexpress.net/php/instructorGetSearchLive.php",
            type: 'POST',
            dataType: "json",
            data: {busca: $("#buscaInstructor").val()},
            beforeSend: function () {

            },

            success: function (respuesta) {

                var tam;
                var datosrespuesta = respuesta.resultados;
                $("#tablaresultadosinstructor").empty();
                $.each(datosrespuesta, function (i, item) {
                    tam = tam + 1;
                    $("#tablaresultadosinstructor").append('<tr>\n\
                                                            <td>' + datosrespuesta[i].PER_CODIGO + '</td>\n\
                                                            <td>' + datosrespuesta[i].PER_NOMBRE + '</td>\n\
                                                            <td>' + datosrespuesta[i].PER_P_APELLIDO + '</td>\n\
                                                            <td>' + datosrespuesta[i].PER_S_APELLIDO + '</td>\n\
                                                            <td>' + datosrespuesta[i].INS_FECHAINGRESO + '</td>\n\
                                                            <td>' + datosrespuesta[i].INS_ESTADO + '</td>\n\
                                                            <td>' + datosrespuesta[i].ACA_CODIGO + '</td>\n\
                                                            <td><button onclick="Update(' + datosrespuesta[i].PER_CODIGO + ')" class=" btn btn-sm btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModalupdateinstructor" ></button> <button onclick="preguntarSiNo(' + datosrespuesta[i].PER_CODIGO + ')" class=" btn btn-sm btn-danger glyphicon glyphicon-remove  "></button></td></tr>');

                });


            },
            error: function () {

            }
        });
    }
}
