<?php
    // SWITCH - Condicional usada quando se tem um valor específico a ser testado
    $opc = 5; // 1 - Carro; 2 - Moto; 3 - Bicicleta; 4 - Navio; 5 - Avião

    switch($opc){
        case 1:
            echo("Carro"); 
            break;
        case 2:
            echo("Moto");   
            break;
        case 3:
            echo("Bicicleta");
            break;
        case 4: 
            echo("Navio");
            break;
        case 5:
            echo("Avião");
            break;
        default:
            echo("Transporte inválido!");
            break;

        // break serve para parar o switch quando ele encontrar a opção
        // default padrão para opções que não foram tratadas
    }

    echo("<hr>");

        
    // Testar faixa de valores
    switch ($opc) {
        case ($opc <= 3 && $opc >= 1):
            echo("Transporte terrestre!");
            break;
        case 4:
            echo("Transporte marítimo!");
            break;
        case 5:
            echo("Transporte aéreo!");
            break;  
    }

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 6 | SWITCH CASE </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   
</body>
</html>