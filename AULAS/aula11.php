<?php
    // BREAK - Interrupção de processamento

    $vetor = array("Mouse", "Teclado", "Monitor", "Memória", "Sair", "Microfone", "Impressora");
    $tamanho = count($vetor);
    $i = 0;
    echo("Loop While </br>");
    while($i < $tamanho){
        echo($vetor[$i]."</br>");
        $i++;
        if($vetor[$i] == "Sair"){
            break;
        }
    }

    echo("</br><hr></br>");
    
    echo("Loop Do While </br>");
    $i = 0;
    do{
        if($vetor[$i] == "Sair"){
            break;
        }
        echo($vetor[$i]."</br>");
        $i++;
    }while($i < $tamanho);

    echo("</br><hr></br>");
    
    echo("Loop For </br>");
    for($i = 0; $i < $tamanho; $i++){
        if($vetor[$i] == "Sair"){
            break;
        }
        echo($vetor[$i]."</br>");
    }

    echo("</br><hr></br>");
    
    echo("Loop ForEach </br>");
    $i = 0;
    foreach($vetor as $componente){
        if($componente == "Sair"){
            break;
        }
        echo($componente."</br>");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 11 | BREAK </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   
</body>
</html>