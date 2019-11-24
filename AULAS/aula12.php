<?php
    // Criando função
    function aula (){
        echo("<hr/> Hello, World! </br>");
        echo("Aula sobre funções <hr/>");
    }

    // Chamando função    
    aula();
    
    // Função com parâmetros
    function soma ($a, $b){
        $res = $a + $b;
        echo(" </br> A soma de $a + $b = $res </br>");
    }

    // Chamando a função com parâmetros
    soma(4,5);

    echo("<hr/>");

    // Função com retorno 
    function soma2 ($a, $b){
        $res = $a + $b;
        return $res;
    }

    $res = soma2(4, 5);
    echo($res);

    echo("<hr/>");

    //Função com array

    $vetor = array(1, 3, 5, 7, 9, 12, 6, 4, 20, 18);

    function media($array){
        $soma = 0;
        $i = 0;
        $tamanho = count($array);

        for($i = 0; $i < $tamanho; $i++){
            $soma += $array[$i];
        }

        $media = $soma / $tamanho;

        return $media;
    }

    $media = media($vetor);
    echo($media);


    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 12 | FUNÇOES </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   
</body>
</html>