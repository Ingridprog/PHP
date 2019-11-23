<?php
    // CONDICIONAL IF-ELSE
    $nota1 = 60;

    if($nota1 >= 70){
        echo("<font color=blue>Aprovado!</font>");
    }elseif($nota1 >= 50){
        echo("<font color=orange>Recuperação!</font>");
    }else{
        echo("<font color=red>Reprovado!</font>");    
    }

    echo "<hr>";

    if($nota1 >= 40 && $nota1 <= 60){
        echo("Aluno selecionado!");
    }else{
        echo("Aluno fora da faixa!");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 5 | IF ELSE </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   
</body>
</html>