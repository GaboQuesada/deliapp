

function activarseccion(id)
{

    var ids = ["me0", "me1", "me2", "me3", "me4"];

    for (var i = 0; i < 5; i++) {

        if (ids[i] === id) {
            $("#" + ids[i]).addClass("active");
        } else {
            $("#" + ids[i]).removeClass("active");
        }
        ;

    }

}

