

function ConstriyeTablaYcuadroPaginacion() {  // construye la tabla y la paginacion persona


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


  
   ConstriyeTablaYcuadroPaginacion();

});


