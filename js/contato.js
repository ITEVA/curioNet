$(document).ready(function(){
    $('div#emailSucesso2').css("display", "none");
    $("#formContato2").submit(function(){
        $.ajax({
        method: "POST",
        url: "Emails/emailContato.php",
        data: {nome:$('#nomeContato').val(), email:$('#emailContato').val(),
               telefone:$('#telefoneContato').val(),endereco:$('#enderecoContato').val(),
               mensagem:$('#mensagemContato').val()}
        }).done(function() {
        });
        

        $('div#emailSucesso2').css("display", "block");      

        $("#formContato2").each(function(){
           this.reset();
        });
        
        setTimeout(
            function(){ 
                location.reload();
            },4000
        );
        return false;
    });
  });


