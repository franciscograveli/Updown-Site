<?php

// Variáveis do e-mail

$nome = $_POST['nameInput'];
$email = $_POST['emailInput'];
$assunto = 'Contato pelo site';
$mensagem = $_POST['mailBody'];

// Horário e data de envio
$sendTime = date('H:i:s');
$sendDate = date('d/m/Y');

// Variáveis para enviar o e-mail a nós
$targetMail = 'suportetiupdown@gmail.com';
$destino = $targetMail;

// Estilizando o email
$corpo = "Nome: " . $nome . " - E-mail: " . $email . " - Mensagem: " . $mensagem;

// Indicando que o e-mail é em html
$headers = 'From: suportetiupdown@gmail.com' . '\r\n' .
    'Reply-To: ' . $email .'\r\n' .
    'X-Mailer: PHP/' . phpversion();


// Enviando e-mail
$sendEmail = mail($destino, $assunto, $corpo, $headers);

// Verificando se foi enviado
if ($sendEmail) {
    debug_to_console("e-mail enviado");
} else {
    debug_to_console("Alguma coisa aconteceu com o e-mail.");
}

function debug_to_console($data)
{
    $output = $data;
    if (is_array($output)) {
        $output = implode(',', $output);
    }
    echo "<script>console.log('Debug Log: " . $output . "' );</script>";
}
