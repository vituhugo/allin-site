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
$body .= "<p><b>Email:</b> {$_POST['email']}</p> \r\n";
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
<<<<<<< HEAD
//    die(json_encode(array('mensagem' => 'Erro inesperado ao enviar o email.', 'status' => false)));
}

die(json_encode(array('mensagem' => 'Email enviado com sucesso!', 'status' => true, 'hubspot-response' => hubspotConversion())));

function hubspotConversion() {
    $hubspotutk      = $_COOKIE['hubspotutk']; //grab the cookie from the visitors browser.
    $ip_addr         = $_SERVER['REMOTE_ADDR']; //IP address too.
    $hs_context      = array(
        'hutk' => $hubspotutk,
        'ipAddress' => $ip_addr,
        'pageUrl' => 'http://allin.com.br/',
        'pageName' => 'Footer Form'
    );
    $hs_context_json = json_encode($hs_context);

    $str_post = "email=" . urlencode($_POST['email'])
        . "&leadin_nome_c0289e98897ab58f231c168b19a67b2e=" . urlencode($_POST['nome'])
        . "&leadin_telefone_904ef931540a48dbb8dd83744801e3b6=" . urlencode($_POST['tel'])
        . "&leadin_mensagem_20fda0cb45b099d6e77e05908e4c12bc=" . urlencode($_POST['mensagem'])
        . "&hs_context=" . urlencode($hs_context_json); //Leave this one be

    $endpoint = 'https://forms.hubspot.com/uploads/form/v2/4037989/85bc912a-3f79-4ed7-b0f3-8fec21d89724';

    $ch = @curl_init();
    @curl_setopt($ch, CURLOPT_POST, true);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
    @curl_setopt($ch, CURLOPT_URL, $endpoint);
    @curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded'
    ));
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response    = @curl_exec($ch); //Log the response from HubSpot as needed.
    $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); //Log the response status code
    @curl_close($ch);
    return $status_code . " " . $response . ' ' . $str_post;
}
=======
    die(json_encode(array('mensagem' => 'Erro inesperado ao enviar o email.', 'status' => false)));
}

die(json_encode(array('mensagem' => 'Email enviado com sucesso!', 'status' => true)));
>>>>>>> 1c5d329b9fff63547ce8523dc5a4915edaa39627
