$(function() {
    $(".menu2").click(function (event) {
        event.preventDefault();

        $('.menu2').css({'height': '0'});

        $('#change-hamburguer').click();

    });

    $(".linkRola").click(function (event) {
        event.preventDefault();
        var idElemento = $(this).attr("href");
        var deslocamento = $(idElemento).offset().top;
        $('html, body').animate({ scrollTop: deslocamento }, 1000);
    });

    $('a[class=hamburguer]').click(function(e) {


        var maskHeight = $(document).height();
        var maskWidth = $(window).width();

        $('.menu2').css({'width':maskWidth,'height':maskHeight});

        $(id).fadeIn(3000);

    });

    $("ul li.itemMenu").click(function (event) {
        event.preventDefault();
    });

    $(document).scroll(function(){
        if($(this).scrollTop() >= 0 && $(this).scrollTop() < 1066){
            ativar("liMenu1");
        }
        else if($(this).scrollTop() >= 1066 && $(this).scrollTop() < 1735){
            ativar("liMenu2");
        }
        else if($(this).scrollTop() >= 1735 && $(this).scrollTop() < 2500){
            ativar("liMenu3");
        }
        else {
            ativar("liMenu4");
        }
    });

    function ativar(link){
        $('.itemMenu').each(function(){
            $(this).removeClass('active')
                   .addClass('desactive');
        });

        $("#" + link).removeClass('desactive')
                     .addClass("active");
    }

    var posicaoMenu = $("#fixo").offset().top;
    var posicaoMenuM = $("#menuToggle").offset().top;
    var largura  = $(window).width();

    $(window).resize(function() {
        posicaoMenu = $("#fixo").offset().top;
        posicaoMenuM = $("#menuToggle").offset().top;
        largura  = $(window).width();
    });
    $(window).scroll(function () {
        //distancia que o scroll devera rolar para aparecer o box da div
        if ($(this).scrollTop() >= posicaoMenu && posicaoMenuM == 0) {
            $("#fixo").addClass('fixo');
            $(".divisao").css('visibility','visibility').css('display','block');
            $(".branco").css('visibility','visible');
        }
        else {
            $("#fixo").removeClass('fixo');
            $(".divisao").css('visibility','hidden').css('display','none');
            $(".branco").css('visibility','hidden');
        }

        if ($(this).scrollTop() >= posicaoMenuM && posicaoMenuM != 0) {
            $("#menuToggle").css('position','fixed').css('top','0px').css('margin-top','0px');
            $(".tudo").css('margin-top','30px');
        }
        else{
            $("#menuToggle").css('position','relative').css('top','none');
            $(".tudo").css('margin-top','0');
        }
    });
});
