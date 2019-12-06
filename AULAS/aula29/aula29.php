<?php
    include "../conexao.inc";

    // Comando para executar no bd
    $resultado = mysqli_query($conn, "SELECT * FROM tbl_cadastro");

    // comando para retornar o número de registros no bd
    $linhas = mysqli_num_rows($resultado);

    echo("Encontrados $linhas registro(s) na tabela tbl_cadastro.");

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 29 | EXECUTANDO COMANDOS MYSQL </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
</body>
</html>