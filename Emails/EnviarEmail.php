<?php
            
    function sendMail($assunto,$mensagem,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL, $anexo = NULL, $logo){
            
        $mail = new PHPMailer(); //INICIA A CLASSE
        $mail->IsSMTP(); //Habilita envio SMPT
        $mail->SMTPAuth = true; //Ativa email autenticado
        $mail->IsHTML(true);
        $mail->CharSet = "UTF-8"; // Charset da mensagem (opcional)
        
        /* Protocolo da conexão */
        $mail->SMTPDebug = 4; 
        $mail->SMTPSecure = "ssl";
        
        $mail->Host = 'smtp.gmail.com'; //Servidor de envio
        $mail->Port = 465 ; //Porta de envio
        $mail->Username = 'josinaldosb@gmail.com'; //email para smtp autenticado
        $mail->Password = 'jo22sb11'; //seleciona a porta de envio

        $mail->From = 'josinaldosb@gmail.com'; //remetente
        $mail->FromName = 'Connect - Internet Banda Larga'; //nome remetente

        /* Enviar imagem */
        $mail->AddEmbeddedImage($logo, 'connect');
        
        if($reply != NULL){
            $mail->AddReplyTo($reply,$replyNome);
        }
        
        if($anexo != NULL){
            $mail->AddAttachment($anexo);
        }

        $mail->Subject = $assunto; //assunto
        $mail->Body = $mensagem; //mensagem
        $mail->AddAddress($destino,$nomeDestino); //email e nome do destino

        if($mail->Send()){           
            echo 'deu certo pvt!';
            return true;
        }else {           
            echo 'deu errado!';
            echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
            return false;
        }
    }
?> 