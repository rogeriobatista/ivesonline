<?php
$nome = $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['comment'];

$to = "contato@ivesonline.com.br";
$subject = "Contato da Ives Online";

$message  = "<h1>Mensagem da página Ives Online</h1>";
$message .= "<p>Nome: $nome</p>";
$message .= "<p>Email: $email</p>";
$message .= "<p>Mensagem: $mensagem</p>";

$header = "From:contato@ivesonline.com.be \r\n";
// $header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
   echo "Mensagem enviada com sucesso! <br/> Logo entraremos em contato.";
}else {
   echo "Ocorreu um erro no envio da mensagem! <br/> Por favor, tente novamente.";
}