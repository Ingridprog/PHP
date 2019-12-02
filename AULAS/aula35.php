<?php
    include "conexao.inc";

    $sql = 'DELETE FROM tbl_cadastro WHERE codigo = 7';

    if(mysqli_query($conn, $sql)){
        echo("Registro apagado!");
    }else{
        echo("não foi possivel apagar esse registro!");
    }

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 35 | DELETE </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>

</body>
</html>