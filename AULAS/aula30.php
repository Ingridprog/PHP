<?php
    include "conexao.inc";

    $nome="Pietra";
    $user="Pietra";
    $senha="123";
    $email="pietra@gmail.com";
    $telefone="(11) 4141-3686";
    $status="1";
    $obs="Future";

    $sql = "INSERT INTO tbl_cadastro  VALUES (null, '$nome', '$user', 
        '$senha', '$email', '$telefone', $status, '$obs')";

    $resultado = mysqli_query($conn, $sql);

    if($resultado){
        echo("Registro inserido com sucesso!<br>");
    }else{
        echo("Erro ao executar comando!<br>");
    }

    // Retorna o número de linhas afetadas pela operação MySQL
    $num = mysqli_affected_rows($conn);
    echo($num);

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 30 | COMANDO INSERT </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
</body>
</html>