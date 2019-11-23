<?php
    $i = 0;
    $tamanho = 10;
    $vetor = array($tamanho);

    // Precisa de um controle de incremento ou decremento
    while($i <= $tamanho){
        echo($i." ");
        $i++;
    }

    echo("</br><hr></br>");

    // Atribuindo valores num array
    $i = 0;    
    while($i <= $tamanho){
        $vetor[$i] = $i;
        echo($vetor[$i]."</br>");
        $i++;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 7 | LOOP WHILE </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   
</body>
</html>