$(function(){
    $("ul a").click(function (event) {
        event.preventDefault();
        var idElemento = $(this).attr("href");
        var deslocamento = $(idElemento).offset().top;
        $('html, body').animate({ scrollTop: deslocamento }, 1000);
    });
});

$(document).ready(function() {

    $('a[class=hamburguer]').click(function(e) {

        var maskHeight = $(document).height();
        var maskWidth = $(window).width();

        $('.menu2').css({'width':maskWidth,'height':maskHeight});

        document.getElementById("menu2").style.marginTop = -maskHeight;

        $(id).fadeIn(3000);

    });

});

$(function(){
    $("ul li#liMenu2").click(function (event) {
        event.preventDefault();
        document.getElementById("liMenu2").className = "active";
        document.getElementById("liMenu1").className = "";
        document.getElementById("liMenu3").className = "";
        document.getElementById("liMenu4").className = "";
        document.getElementById("liMenu5").className = "";
    });
});

$(function(){
    $("ul li#liMenu1").click(function (event) {
        event.preventDefault();
        document.getElementById("liMenu1").className = "active";
        document.getElementById("liMenu2").className = "";
        document.getElementById("liMenu3").className = "";
        document.getElementById("liMenu4").className = "";
        document.getElementById("liMenu5").className = "";
    });
});

$(function(){
    $("ul li#liMenu3").click(function (event) {
        event.preventDefault();
        document.getElementById("liMenu3").className = "active";
        document.getElementById("liMenu1").className = "";
        document.getElementById("liMenu2").className = "";
        document.getElementById("liMenu4").className = "";
        document.getElementById("liMenu5").className = "";
    });
});

$(function(){
    $("ul li#liMenu4").click(function (event) {
        event.preventDefault();
        document.getElementById("liMenu4").className = "active";
        document.getElementById("liMenu1").className = "";
        document.getElementById("liMenu3").className = "";
        document.getElementById("liMenu2").className = "";
        document.getElementById("liMenu5").className = "";
    });
});

$(function(){
    $("ul li#liMenu5").click(function (event) {
        event.preventDefault();
        document.getElementById("liMenu5").className = "active";
        document.getElementById("liMenu1").className = "";
        document.getElementById("liMenu3").className = "";
        document.getElementById("liMenu4").className = "";
        document.getElementById("liMenu2").className = "";
    });
});