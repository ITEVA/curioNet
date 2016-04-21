$(function() {
    $(".menu2").click(function (event) {
        event.preventDefault();

        $('.menu2').css({'height': '0'});

        $('#change-hamburguer').click();

    });
});

$(function(){
    $(".linkRola").click(function (event) {
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
/*
$(function () {
    //incluso essa variavel para setar atributos do css depois
    var elemento = $('.fixo');
    var elemento2 = $('.divisoria');

    $(window).scroll(function () {
        //distancia que o scroll devera rolar para aparecer o box da div
        if ($(this).scrollTop() > 90) {
            //bloco incluso para setar o css
            elemento.css({
                'position': 'fixed',
                'top': '0px',
                'z-index': '1000',
                'background-color': '#fff',
                'width': '100%'
            });

            elemento1.css({
                'visibility': 'visibility'
            });

            $('.fixo').fadeIn();
        }else {
            //bloco incluso para setar o css
            elemento.css({
                'position': 'relative'
            });
        }
    });
});
*/