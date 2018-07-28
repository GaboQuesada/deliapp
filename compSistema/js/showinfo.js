
function showmsg(ppb) {
    var pb = ppb;
    $("#showinfo").show();
    $("#showinfomsg").text(pb);

}

function hidemsg() {

    $("#showinfo").hide();


}

$(document).ready(function () {

    $("#showinfo").hide();

})
