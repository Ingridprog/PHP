<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 41 | TRABALHANDO COM ARQUIVOS </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php

        // r = Abre para leitura, ponteiro no início
        // r+ = Abre para leitura e escrita
        // w = Abre para ecrita, ponteiro no início e zera, se o arquivo não existir ele cria
        // w+ = Abre para leitura e escrita
        // a = Abre para ecrita, ponteiro no final, se o arquivo não existir ele cria
        // a+ = Abre para leitura e escrita
        // x = Abre para ecrita, ponteiro no início, se o arquivo ja existir gera um erro do tipo E_WARNING
        // x+ = Abre para leitura e escrita

        // fopen - abre ou cria arquivos, recebe como parâmetro o nome do arq e o modo
        $arquivo = fopen("aula.txt", "a");

        fwrite($arquivo, "\r\nCurso de php");


        $arquivo = fopen("aula.txt", "r");

        // para leitura do arquivo, recebe como parâmetro o nome do arq e o tamanho
        $conteudo = fread($arquivo, 100);

        echo($conteudo);

        // fecha o arquivo
        fclose($arquivo);
    
    ?>
</body>
</html>