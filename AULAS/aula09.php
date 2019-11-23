<?php
    $i = 0;
    $tamanho = 5;

    for($i = 0; $i <= $tamanho; $i++){
        echo("Valor de i: $i </br>");
    }

    echo("</br>");
    for($i = 0; $i <= 100; $i++){
         echo("-");
    }
    echo("</br></br>");

    $i = 0;
    $vetor = array($tamanho);

    // loop for com array
    for($i = 0; $i <= $tamanho; $i++){
        $vetor[$i] = $i;
        echo($vetor[$i]."</br>");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 9 | LOOP FOR </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   
</body>
</html>