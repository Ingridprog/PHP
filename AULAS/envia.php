<?php
    $email = $_POST['txtemail'];
    $assunto = $_POST['txtassunto'];
    $msg = $_POST['txtmsg'];

    // para quem vai, assunto, msg 
    if(mail($email, $assunto, $msg)){
        echo("Mensagem Enviada! <br/>");
    }else{
        echo("Erro ao enviar mensagem! <br/>");
    }

    echo("<a href='aula26.php'>Voltar</a>");


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 26 | ENVIANDO EMAIL </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
</body>
</html>