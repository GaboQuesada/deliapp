
$(window).resize(function(){     

       if ($('#masterbox').width() >= 1200 ){

            $("#boxcontrol").removeClass("container-fluid");
         $("#boxcontrol").addClass("container");

       }else if ($('#masterbox').width() >= 992 && $('#masterbox').width() <= 1199.98 ){

          $("#boxcontrol").removeClass("container-fluid");
         $("#boxcontrol").addClass("container");

       }else if ($('#masterbox').width() >= 768 && $('#masterbox').width() <= 991.98 ){

          $("#boxcontrol").removeClass("container-fluid");
         $("#boxcontrol").addClass("container");

       }else if ($('#masterbox').width() >= 576 && $('#masterbox').width() <= 767.98 ){

         $("#boxcontrol").removeClass("container");
         $("#boxcontrol").addClass("container-fluid");
        

       }else if ($('#masterbox').width() <= 575.98  ){

          $("#boxcontrol").removeClass("container");
         $("#boxcontrol").addClass("container-fluid");

       }



});