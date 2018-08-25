

$(document).ready(function () {

    if ($('#masterbox').width() >= 1200) {

        $("#boxConFormU").removeClass("cajaformuser");
        $("#boxConFormU").addClass("cajaformuserf");

    } else if ($('#masterbox').width() >= 992 && $('#masterbox').width() <= 1199.98) {

        $("#boxConFormU").removeClass("cajaformuserf");
        $("#boxConFormU").addClass("cajaformuser");

    } else if ($('#masterbox').width() >= 768 && $('#masterbox').width() <= 991.98) {

        $("#boxConFormU").removeClass("cajaformuserf");
        $("#boxConFormU").addClass("cajaformuser");

    } else if ($('#masterbox').width() >= 576 && $('#masterbox').width() <= 767.98) {

        $("#boxConFormU").removeClass("cajaformuserf");
        $("#boxConFormU").addClass("cajaformuser");


    } else if ($('#masterbox').width() <= 575.98) {

        $("#boxConFormU").removeClass("cajaformuserf");
        $("#boxConFormU").addClass("cajaformuser");

    }

});

$(window).resize(function () {

    if ($('#masterbox').width() >= 1200) {

        $("#boxConFormU").removeClass("cajaformuser");
        $("#boxConFormU").addClass("cajaformuserf");

    } else if ($('#masterbox').width() >= 992 && $('#masterbox').width() <= 1199.98) {

        $("#boxConFormU").removeClass("cajaformuserf");
        $("#boxConFormU").addClass("cajaformuser");

    } else if ($('#masterbox').width() >= 768 && $('#masterbox').width() <= 991.98) {

        $("#boxConFormU").removeClass("cajaformuserf");
        $("#boxConFormU").addClass("cajaformuser");

    } else if ($('#masterbox').width() >= 576 && $('#masterbox').width() <= 767.98) {

        $("#boxConFormU").removeClass("cajaformuserf");
        $("#boxConFormU").addClass("cajaformuser");


    } else if ($('#masterbox').width() <= 575.98) {

        $("#boxConFormU").removeClass("cajaformuserf");
        $("#boxConFormU").addClass("cajaformuser");

    }
});