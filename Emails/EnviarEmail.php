<?php
            
    function sendMail($assunto,$mensagem,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL, $anexo = NULL, $logo = NULL){
            
        $mail = new PHPMailer(); //INICIA A CLASSE
        $mail->IsSMTP(); //Habilita envio SMPT
        $mail->SMTPAuth = true; //Ativa email autenticado
        $mail->IsHTML(true);
        $mail->CharSet = "UTF-8"; // Charset da mensagem (opcional)
        
        /* Protocolo da conexão */
        //$mail->SMTPDebug = 4; 
        //$mail->SMTPSecure = "ssl";
        
        $mail->Host = 'smtp.curionet.com.br'; //Servidor de envio
        $mail->Port = 587 ; //Porta de envio
        $mail->Username = 'contato@curionet.com.br'; //email para smtp autenticado
        $mail->Password = 'cur10n3t'; //seleciona a porta de envio

        $mail->From = 'contato@curionet.com.br'; //remetente
        $mail->FromName = 'CNT - Curió Net Telecom'; //nome remetente

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
            echo 1;
            
        }else {
        }
    }
?> 