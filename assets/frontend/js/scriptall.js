
$(document).ready(function () {
    var g = false;
    $(".close,.iconholder").click(function () {

        $(".menuOverlay").toggleClass("open");

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
    
    $('.compare-select').change(function() {
        $(".compare-form").addClass("open");
    });
    $('.compare-close').on('click',function () {
        $(".compare-form").removeClass("open");
    });

    
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 100) {
                $('header').addClass('affix');
            } else {
                $('header').removeClass('affix');
            }
        });

    $('.niceSelect').niceSelect();

    $(".progress-bar").each(function () {
        each_bar_width = $(this).attr('aria-valuenow');
        $(this).width(each_bar_width + '%');
    });

    // ------- Alert Button ------- //
    if ($('#alert-btn').length) {
        $('#alert-btn').on("click", function() {
            $('.alerts-list').toggle("slow");
        });
    }

});
 