$(function(){
    $("ul a").click(function (event) {
        event.preventDefault();
        var idElemento = $(this).attr("href");
        var deslocamento = $(idElemento).offset().top;
        $('html, body').animate({ scrollTop: deslocamento }, 900);
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
