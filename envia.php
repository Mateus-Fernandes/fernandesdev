<?php

require_once('lib/class.phpmailer.php');

$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 1;
$mailer->Port = 587; //Indica a porta de conexão 
$mailer->Host = 'smtp.umbler.com';//Endereço do Host do SMTP 
$mailer->SMTPAuth = false; //define se haverá ou não autenticação 
$mailer->Username = 'contato@fernandesdesenvolvimento.com.br'; //Login de autenticação do SMTP
$mailer->Password = '120796Mv'; //Senha de autenticação do SMTP
$mailer->FromName = 'Contato Site'; //Nome que será exibido
$mailer->From = 'contato@fernandesdesenvolvimento.com.br'; //Obrigatório ser 
$mailer->AddAddress('contato@fernandesdesenvolvimento.com.br','Contato Fernandes DEV');
//Destinatários
$mailer->Subject = 'Teste enviado através do PHP Mailer 
SMTPLW';
$mailer->Body = 'Este é um teste realizado com o PHP Mailer 
SMTPLW';
if(!$mailer->Send())
{
echo "Message was not sent";
echo "Mailer Error: " . $mailer->ErrorInfo; exit; }
print "E-mail enviado!"
?>