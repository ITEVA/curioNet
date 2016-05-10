<?php

/* Inclui página de enviar email */

require("EnviarEmail.php");

/**
* Inclui classes de envio de email
*/

require_once('../Classes/mail/class.phpmailer.php');

require_once('../Classes/mail/class.smtp.php');



$mensagem2 = "<body>
                <div style='display: block; position:absolute; max-width: 40%; width: auto;  min-height: 390px; border: 2px solid #3e6398; background-color: #fff; padding: 1.5%;'>
                    <div style='display: block; position: relative; float: left; max-width: 60%; width: auto; height: 60px; left: 0.5%; top: 1%;'>
                        <img src='cid:connect'/>
                    </div>
                    <div style='display: block; position: absolute; font-size: 14pt; margin-top: 120px; top: 120px; text-align: left;'>"
                        ."<p>Olá ".$_POST['nome']."!</p>"
                        ."<p>Segue em anexo um arquivo com os planos e preços oferecidos pela Curió Net Telecom.</p>"
                        ."<p>Para obter mais informações entre em contato conosco: </br>(85) 3476-3670 - FIXO | (85) 8711-4447 | contato@curionet.com.br</br></p>"
                        ."<p>Att.</br>CNT - Curió Net Telecom.</p>"
                    ."</div>"
        
                    ."<div style='display: block; position: relative; text-align: left; font-size: 12pt; top: 175px;'>
                        <p><a href='http://curionet.com.br'>clique aqui para ser redirecionado ao site</a></p>  
                    </div>
                    
                </div>
            </body>";

$anexo = '../curioPlanos.pdf';

sendMail('Planos - CNT', $mensagem2, $_POST['email'], $_POST['nome'], NULL, NULL, $anexo, '../img/logoEmail.jpg');