<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AULA 41 | ARQUIVOS - GUESTBOOK </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php
        $nome = $_POST['txtnome'];
        $msg = $_POST['txtmsg'];
        $conteudo = $msg."\r\n".$nome."\r\n";

        $arquivo = fopen("visitas.txt", "a");

        fwrite($arquivo, $conteudo);

        echo("Mensagem gravada: $conteudo <br/>");

        fclose($arquivo);
    ?>
    <hr>
    <a href="index.html">Voltar</a>
</body>
</html>