<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AULA 41 | ARQUIVOS - GUESTBOOK </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   <?php
        $arquivo = fopen("visitas.txt", "r");

        // vai ler as linhas enquanto não for o final do arquivo
        while(!feof($arquivo)){
            echo(fgets($arquivo, 4000));
            echo("<br>".fgets($arquivo,100));
            echo("<hr>");
        }
        fclose($arquivo);
   
   ?>
</body>
</html>