





$(window).resize(function(){     

       if ($('#contenedorcentral').width() >= 1200 ){

            //$("#caja1").text(" 1200");

       }else if ($('#contenedorcentral').width() >= 992 && $('#contenedorcentral').width() <= 1199.98 ){

         //$("#caja1").text(" 992 - 1199.98");

       }else if ($('#contenedorcentral').width() >= 768 && $('#contenedorcentral').width() <= 991.98 ){

          //  $("#caja1").text("768 - 991.98");

       }else if ($('#contenedorcentral').width() >= 576 && $('#contenedorcentral').width() <= 767.98 ){

           // $("#caja1").text("576  -  767.98");

       }else if ($('#contenedorcentral').width() <= 575.98  ){

          //  $("#caja1").text("575.99");

       }



});