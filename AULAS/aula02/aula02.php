<?php
    // VARIÁVEIS - Posição na memória RAM - podem ser alteradas
    $nome = "Ingrid";
    $nasc = 1998;
    $ano = 2019;

    echo $nome."</br>";
    echo ("Idade: ".($ano - $nasc)."</br>"); 

    echo "<hr>";

    // CONSTANTES - NÃO podem ser alteradas
    define("CURSO", "PHP");

    echo ("Curso: ".CURSO."</br>");

    // constantes predetermindas
    echo("Documento: ".__FILE__."</br>");
    echo("Diretório: ".__DIR__."</br>");
    echo("Versão do Sistema Operacional: ".PHP_OS."</br>");
    echo("versão do PHP: ".PHP_VERSION."</br>");
    echo("Linha atual: ".__LINE__."</br>")
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 2 | VARIÁVEIS </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   
</body>
</html>