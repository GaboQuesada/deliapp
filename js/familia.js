

function ConstriyeTablaYcuadroPaginacion() {  // construye la tabla y la paginacion persona

    alert("entro 222");
    var cantidad;
    $.ajax({
        url: "http://deliapp.tk/ws/familiacount.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },

        success: function (respuesta) {
          
          var cantidad = respuesta.resultados;
          alert(cantidad);
          $("#cantregfamilia").text('<p>Total registros:' + cantidad + ' </p>');

        },
        error: function () {

        }
    });


 


}

$(document).ready(function () {

   alert("listo");
   $("#cosita").html('<p>hola mundo</p>');
   ConstriyeTablaYcuadroPaginacion();

});


