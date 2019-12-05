<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 26 | ENVIANDO EMAIL </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form action="envia.php" method="post" name="email">
        <label> Email </label> <br>
        <input type="text" name="txtemail"> <br>
        <label> Assunto </label> <br>
        <input type="text" name="txtassunto"> <br>
        <label> Mensagem </label> <br>
        <textarea name="txtmsg" cols="50" rows="5"></textarea> <br> <br>
        <input type="submit" value="Enviar">
    </form>        
</body>
</html>