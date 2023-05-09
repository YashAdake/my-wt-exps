$(document).ready(function () {


    $("#run").click(function () {
        $("#girl").animate({

            left: 1500

        }, 8000);
    })

    $("#come").click(function () {
        $("#girl").animate({

            left: 0

        }, 8000);
    })

    //--------------------------------------

    $("#up").click(function () {
        $("#ball").animate({

            top: "-=50"

        }, 10);
    })

    $("#down").click(function () {
        $("#ball").animate({

            top: "+=50"

        }, 10);
    })

    $("#left").click(function () {
        $("#ball").animate({

            left: "-=50"

        }, 10);
    })

    $("#right").click(function () {
        $("#ball").animate({

            left: "+=50"

        }, 10);
    })

    $("#center").click(function () {
        $("#ball").animate({
            width: "+=50",
            height: "+=50"
        })
    })




})