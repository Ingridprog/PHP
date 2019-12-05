<?php
    // data
    $dia = date("d");
    $mes = date("m");
    $ano = date("Y"); // y: 00 Y: 0000

    $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

    // hora
    $hora = date("H"); // h: 12h H: 24h
    $minuto = date("i");
    $segundo = date("s");

    echo($dia. " de ". $meses[$mes - 1]. " de ".$ano."</br>");
    echo($hora.":".$minuto.":".$segundo);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 15 | MANIPULAÇÃO DE DATA E HORA </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   
</body>
</html>