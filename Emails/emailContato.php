<?php

/* Inclui página de enviar email */
require("EnviarEmail.php");

/**
* Inclui classes de envio de email
*/
require_once('../Classes/mail/class.phpmailer.php');
require_once('../Classes/mail/class.smtp.php');
        
//$destinatario = 'contato@connectja.com.br' ;

$mensagem2 ="<body style='background-color: #d4d4d4;'>
                <div style='display: block; position:absolute; max-width: 60%; width: auto;  min-height: 502px; border: 2px solid #3e6398; border-bottom: 25px solid #3e6398; background-color: #fff; padding: 1.5%;'>
                    <div style='display: block; position: relative; float: left; max-width: 60%; width: auto; height: 60px; left: 0.5%; top: 1%;'>
                        <img src='cid:connect' style='width: 180px; height: 60px;'/>
                    </div>

                    <div style='display: block; position: relative; width: 97%; font-size: 14pt; border: 2px solid #3e6398; top: 140px; padding: 3px; min-height: 300px; max-height: 350px; height: auto; overflow-y: auto;'>
                    <br/><b>Nome:</b>  ".$_POST['nome']."<br/>
                        <b>Email:</b>  ".$_POST['email']."<br/>
                        <b>Endereço:</b>  ".$_POST['endereco']."<br/>
                        <b>Telefone:</b>  ".$_POST['telefone']."<br/><br/></br>
                        ".$_POST['mensagem']."
                    </div></br>
                    <div style='display: block; position: relative; text-align: left; font-size: 12pt; top: 175px;'>
                        <a href='http://curionet.com.br'>clique aqui para ser redirecionado ao site</a>  
                    </div>
                </div>
            </body>"; 

sendMail('Fale Conosco - Site Curió',$mensagem2,'gisellyazevedo@hotmail.com','CNT - Curió Net Telecom', NULL, NULL, NULL, '../img/logoEmail.jpg');
?>