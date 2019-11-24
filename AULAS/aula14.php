<?php
    // função recursiva - chama a si própria 
    function aula ($num){
        if($num <> 0){
            echo("Função aula com o valor: $num </br>");
            aula($num - 1);
        }
    }
    // chama a função 
    aula(10);

    echo("<hr/>");

    // Fatorial
    function fatorial ($num){
        if($num < 0){
            return -1;
        }
        if($num <= 1){
            return 1;
        }

        if($num > 1){
            return $num * fatorial($num - 1);
        }
    }

    $fatorial = fatorial(4);

    echo("Fatorial de 4 é : $fatorial");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 14 | FUNÇÕES RECURSIVAS </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   
</body>
</html>