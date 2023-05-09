$(document).ready(function () {

    $("p").dblclick(function () {
        $(this).hide();
    })

    $("p").click(function () {
        $(this).css("backgroundColor", "black");
    })

    $("#btn1").click(function () {
        $("#a").toggle(1000);
    })

    $("#btn2").click(function () {
        $("#b").slideToggle(2000);
    })

    $("#btn3").click(function () {
        $("#c").fadeToggle(2000);
    })

    $("#btn4").click(function () {
        $("#d").css({ "fontSize": "200%" });
    })












})

