<?php 

//INCLUDE DA LIB DO PHP MAILER, NÃO ALTERAR OS ARQUIVOS INTERNOS
require_once 'PHPMailer-master/PHPMailerAutoload.php';

function defaultsend($remetente, $nomeremetente, $assunto, $mensagemHTML, $files) {
	$mail = new PHPMailer();
	$mail->From = $remetente;
	$mail->FromName = $nomeremetente;
	$mail->AddAddress('andre.tipopublicidade@gmail.com');
	$mail->AddCC('alexandre@tipopublicidade.com.br');
	$mail->AddCC('guilherme@tipopublicidade.com.br');
	$mail->AddCC('lillyane@tipopublicidade.com.br');
	$mail->CharSet = 'UTF-8';
	$mail->Subject = $assunto;
	$mail->Body = $mensagemHTML;	
	$mail->IsHTML (true);

	if(!empty($files)) {
		$mail->AddAttachment($files['material']['tmp_name'], $files['material']['name']);
	}
	
	//A AUTENTICAÇÃO A SEGUIR FOI CONFIGURADA DEVIDO ERROS INTERNOS NO SERVIDOR
	$mail->IsSMTP(); //DEFINE QUE É SMTP
	$mail->Host = 'mail.tipopublicacao.com.br'; //DEFINE O HOST
	$mail->Port = 25; //DEFINE A PORTA
	$mail->SMTPAuth = true; //AUTENTICAÇÃO SET TRUE(VERDADEIRO)
	$mail->Username = 'contato@tipopublicacao.com.br'; //E-MAIL PARA AUTENTICAÇÃO(NO CASO FOI CRIADO UM E-MAIL DO GMAIL)
	$mail->Password = 'GRStipo6465'; //SENHA DO E-MAIL

	try {
		if($mail->Send()) {
			return true;
		} else {
			return false;
		}
	} catch (Exception $e) {
		return $e->getMessage();
	}
}

?>