<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 43 | ARQUIVOS - CONTADOR DE VISITAS</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php
        // r = Abre para leitura, ponteiro no início
        // r+ = Abre para leitura e escrita
        // w = Abre para ecrita, ponteiro no início e zera, se o arquivo não existir ele cria

        $arquivo = fopen("contador.txt", "r");
        $cont = fread($arquivo, 21); // 999 999 999 999 999 999 999 de acessos
        $cont++;
        $arquivo = fopen("contador.txt", "w");
        fwrite($arquivo, $cont);
        fclose($arquivo);

        echo("Quantidade de acessos: $cont <br>");
    ?>
</body>
</html>