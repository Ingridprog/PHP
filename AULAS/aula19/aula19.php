<?php
    // Inicia variavel de sessão
    session_start();

    // Criando
    $_SESSION['nome'] = "Ingrid";
    $_SESSION['texto'] = "Texto para teste";
    $_SESSION['log'] = "s";

    echo($_SESSION['nome']."<br/>");

    echo($_SESSION['texto']."<br/>");

    // Apaga variavel de sessão
    unset($_SESSION['texto']);

    if(!isset($_SESSION['texto'])){
        echo ("Variavel de Sessão Apagada! <br/><br/>");
    }
    

    if(isset($_SESSION['curso'])){
        echo ($_SESSION['curso']."</br></br>");
    }else{
        echo("Variavel NÃO criada! <br/>");
    }

   // Destroi sessão
   //session_destroy();

 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 19 | SESSÕES </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   <a href="pagina01.php" target=_self> Página 01 </a>
</body>
</html>