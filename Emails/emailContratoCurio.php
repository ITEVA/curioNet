<?php

/* Inclui página de enviar email */
require("EnviarEmail.php");

/**
* Inclui classes de envio de email
*/
require_once('../Classes/mail/class.phpmailer.php');
require_once('../Classes/mail/class.smtp.php');


date_default_timezone_set("Brazil/East");
$mensagem2 = $mensagem2 ="<body style='background-color: #d4d4d4;'>
                <div style='display: block; position:absolute; max-width: 40%; width: auto;  min-height: 502px; border: 2px solid #3e6398; background-color: #fff; padding: 1.5%;'>
                    <p><br/>Uma solicitação para verificar planos e orçamento foi realizada!<br/></p>
                    <p>Segue abaixo as informações do cliente.</br></p>".
                    "<br/>

                    <p><b>Nome: </b>".$_POST['nome']."</p>" 
                    ."<p><b>Email: </b>".$_POST['email']."</p>"
                    ."<p><b>Telefone: </b>".$_POST['telefone']. "&nbsp;&nbsp;&nbsp;&nbsp;<b>Celular: </b>".$_POST['celular']."</p>"
                    ."<p><b>Rua: </b>".$_POST['rua']."</p>"
                    ."<p><b>Bairro: </b>".$_POST['bairro']."&nbsp;&nbsp;&nbsp;&nbsp;<b>Número: </b>".$_POST['numero']."</p>"
                    ."<p><b>Complemento: </b>".$_POST['complemento']."</p>
                    <p></p>
                    <p><b>Data: </b>".date('d/m/Y H:i')."</p>
                    
                    <p><a href='http://curionet.com.br'>clique aqui para ser redirecionado ao site</a></p>  
                </div>
            </body>"; 

sendMail('Solicitação de orçamento',$mensagem2,'contato@curionet.com.br','CNT - Curió Net Telecom', NULL, NULL, NULL, NULL);
?>