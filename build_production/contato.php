<?php
$to = [
        "Financeiro " => "<financeiro@allin.com.br>",
        "Spam" => "<spamcontrol@allin.com.br>",
        "Jurídico" => "<juridico@allin.com.br>",
        "Comercial" => "<comercial@allin.com.br>",
        "Parcerias" => "<comercial@allin.com.br>",
        "Suporte" => "<helpdesk@allin.com.br>",
        "Outros" => "<contato@allin.com.br>"
    ];

$subject = "";
$body  = "<html><body>";
$body .= "<p><b>DE:</b> {$_POST['nome']}</p> \r\n";
$body .= "<p><b>Telefone:</b> {$_POST['tel']}</p> \r\n";
$body .= "<p><b>Assunto:</b> {$_POST['assunto']}</p> \r\n";
$body .= "<p><b>Corpo da mensagem:</b><br> \r\n\r\n";
$body .= $_POST['mensagem']."</p>";
$body .= "--\r\nEste e-mail foi enviado de um formulário de contato em http://allin.com.br";
$body .= "</body></html>";


$subject_preferences = array(
    "input-charset" => "utf-8",
    "output-charset" => "utf-8",
    "line-length" => 76,
    "line-break-chars" => "\r\n"
);

$header = "Content-type: text/html; charset="."utf-8"." \r\n";
$header .= "From: Sis Allin <site@allin.com.br> \r\n";
$header .= "MIME-Version: 1.0 \r\n";
$header .= "Content-Transfer-Encoding: 8bit \r\n";
$header .= "Date: ".date("r (T)")." \r\n";
$header .= iconv_mime_encode("Subject", $subject, $subject_preferences);

$sent = mail($to[$_POST['assunto']], $subject, $body, $header);

header('Content-Type: application/json');

if (!$sent) {
    die(json_encode(array('mensagem' => 'Erro inesperado ao enviar o email.', 'status' => false)));
}

die(json_encode(array('mensagem' => 'Email enviado com sucesso!', 'status' => true)));