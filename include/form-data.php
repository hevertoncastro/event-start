<?php
//DADOS FORMULÁRIO
foreach($_POST as $key => $value) {
  $$key = (isset($key)) ? $value : NULL;
}

//VALIDAÇÕES
if(empty($nome)){
	echo "nome";
	exit;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "email";
	exit;
}

if(empty($telefone)){
	echo "telefone";
	exit;
}

if(empty($assunto)){
	echo "assunto";
	exit;
}

if(empty($mensagem)){
	echo "mensagem";
	exit;
}

//PEGA DATA E HORA
$data = date("d/m/Y");
$hora = date("H:i:s");

//PEGA IP
function getIP(){
$variables = array('REMOTE_ADDR', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'HTTP_X_COMING_FROM', 'HTTP_COMING_FROM', 'HTTP_CLIENT_IP');
$return = 'Unknown';
foreach ($variables as $variable)
{
	if (isset($_SERVER[$variable]))
	{
		$return = $_SERVER[$variable];
		break;
	}
}
return $return;
}
$ip = getIP();

$mensagem = nl2br($mensagem);

$msg  = "<html>
		<head>
		<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
		<title>Heverton Castro - Desenvolvedor Web</title>
		</head>
		<body>
		<table width=\"515\" border=\"0\" cellspacing=\"2\" cellpadding=\"2\" style=\"font-family:Tahoma, Geneva, sans-serif; font-size:14px; color:#333; line-height:150%;\">
		  <tr>
			<td><a href=\"http://www.hevertoncastro.com.br\" title=\"Heverton Castro - Desenvolvedor Web\" target=\"_blank\"><img src=\"http://www.hevertoncastro.com.br/img/layout/contato.jpg\" width=\"515\" height=\"90\" style=\"border:none;\" /></a></td>
		  </tr>
		  <tr>
			<td><span style=\"font-size:22px; padding:25px;\">Dados:</span></td>
		  </tr>
		  <tr>
			<td>
				<p style=\"font-size:15px; padding:5px 25px;\">
					<strong>Nome:</strong> $nome<br />
					<strong>E-mail:</strong> $email<br />
					<strong>Telefone:</strong> $telefone<br />
					<strong>Assunto:</strong> $assunto<br />
					<strong>Mensagem:</strong><br /><br />
					$mensagem
				</p>
			</td>
		  </tr>
		  <tr>
			<td style=\"text-align:center;\"><hr />Para visualizar essas e outras informações,<br />acesse:
				<a href=\"http://www.hevertoncastro.com.br/adm/\" target=\"_blank\" title=\"Administração\" style=\"text-decoration:none; color:#516B8C;\">www.hevertoncastro.com.br/adm</a></td>
		  </tr>
		  <tr>
			<td style=\"font-size:12px; text-align:center; line-height:120%;\"><hr />Recebido em $data às $hora<br />IP: $ip</td>
		  </tr>
		</table>
		</body>
		</html>";

// Passando os dados obtidos pelo formuláo para as variáis abaixo
$quebra_linha 	   = "\n";
$emailsender	   ='emails@hevertoncastro.com.br';
$nomeremetente     = $nome;
$emailremetente    = $email;
$emaildestinatario = "oi@hevertoncastro.com.br";
$comcopia          = "";
$comcopiaoculta    = "";
$assunto           = $assunto." - ".$nome;

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = $msg;

/* Montando o cabeçho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
$headers .= "Cc: ".$comcopia.$quebra_linha;
$headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

/* Enviando a mensagem */
mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender);

echo "ok";
exit;
?>