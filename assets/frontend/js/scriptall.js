$(document).ready(function () {
    var g = false;
    $(".close,.iconholder").click(function () {

        $(".menuOverlay,body").toggleClass("menuon");

    })
    $("#searhddr").click(function () {
        $(".searchdrrouter").addClass("fullheight");
    })

    $("#searhddr").keypress(function () {
        var g = $("#searhddr").val().length;
        if (g > 1) {


            $(".searchi,.close").toggleClass("show");
        }
    })
    $(".selectbtn").click(function () {

        g = $(".insideBtn").hasClass("showdiv");

    });


    $(".selectbtn").click(function (event) {

        $(this).find(".insideBtn").toggleClass("showdiv");
        event.stopPropagation();
    });

    $(document).click(function (event) {
        if (!$(event.target).hasClass('showdiv')) {
            $(".insideBtn").removeClass("showdiv");
        }
    });




});