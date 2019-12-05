<?php
    include "conexao.inc";

    $cat = $_POST['txtcat'];

    $sql = "SELECT * FROM tbl_produtos WHERE categoria = $cat";

    $result = mysqli_query($conn, $sql);

    $linhas = mysqli_num_rows($result);

    echo("$linhas registro(s) encontrado(s)!");


    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 32 | COMANDO SELECT </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>

</body>
</html>