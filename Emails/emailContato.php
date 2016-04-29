<?php

/* Inclui página de enviar email */
require("EnviarEmail.php");

/**
* Inclui classes de envio de email
*/
require_once('../Classes/mail/class.phpmailer.php');
require_once('../Classes/mail/class.smtp.php');
        

date_default_timezone_set("Brazil/East");
$mensagem2 ="<body style='background-color: #d4d4d4;'>
                <div style='display: block; position:absolute; max-width: 60%; width: auto;  min-height: 502px; border: 2px solid #3e6398; border-bottom: 25px solid #3e6398; background-color: #fff; padding: 1.5%;'>
                    <p><br/><b>Nome:</b>  ".$_POST['nome']."<br/></p>
                    <p><b>Email:</b>  ".$_POST['email']."<br/></p>
                    <p><b>Endereço:</b>  ".$_POST['endereco']."<br/></p>
                    <p><b>Telefone:</b>  ".$_POST['telefone']."<br/></p>
                    <p><b>Data:</b>  ".date('d/m/Y H:i')."<br/></p><br/></br>
                    <p></p>
                    <p>MENSAGEM</p>
                    ".$_POST['mensagem']."
                    </br>
                    <div style='display: block; position: relative; text-align: left; font-size: 12pt; top: 175px;'>
                        <a href='http://curionet.com.br'>clique aqui para ser redirecionado ao site</a>  
                    </div>
                </div>
            </body>"; 

sendMail('Fale Conosco - Site Curió',$mensagem2,'contato@curionet.com.br','CNT - Curió Net Telecom', NULL, NULL, NULL, NULL);
?>