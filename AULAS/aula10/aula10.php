<?php

    $transporte = array("Carro", "Moto", "Bicicleta", "ônibus", "Avião", "Navio");

    // $veiculo é a variavel que vai receber os elementos do array
    foreach($transporte as $veiculo){
        echo($veiculo."</br>");
    }

    echo("<hr>");

    foreach($transporte as $veiculo){
        if($veiculo == "Bicicleta"){
            echo("Bicicleta está na lista!");
            break;
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 10 | LOOP FOREACH </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   
</body>
</html>