<?php
    // ARRAY com 5 posições 
    $vetor = array(5);
    $indice = 1;

    $vetor[0] = "Carro";
    $vetor[1] = "Avião";
    $vetor[2] = "Navio";
    $vetor[3] = "Moto";
    $vetor[4] = "Ônibus";

    echo("Elemento de índice ".$indice." = ".$vetor[1]."<br>");

    // ARRAY DE ÍNDICES
    $vetor2 = array(10, 20, 30, 40);

    echo("Elemento de índice ".$indice." = ".$vetor2[1]."<br>");

    // ARRAY COM ÍNDICES CRIADOS
    $vetor3 = array("Nome" => "Ingrid", "Idade" => 21, "Estado" => "SP");

    echo("Nome: ".$vetor3["Nome"]."</br>");

    // ARRAY RECEBENDO ARRAY
    $vetor4 = array(2);

    $vetor4[0] = $vetor3["Nome"];

    echo($vetor4[0]."</br>");

    // MATRIZES (array dentro de array)
    $vetor5 = array(
        array("Carro1", 16000),
        array("Carro2", 18000),
        array("Carro3", 20000)
    );

    echo("Carro A = ".$vetor5[0][0]." - Valor R$".$vetor5[0][1]."</br>");
    echo("Carro B = ".$vetor5[1][0]." - Valor R$".$vetor5[1][1]."</br>");
    echo("Carro C = ".$vetor5[2][0]." - Valor R$".$vetor5[2][1]."</br>");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 4 | ARRAYS (VETORES) </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   
</body>
</html>