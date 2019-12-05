<?php
    include "conexao.inc";

    $codigo = $_POST['txtcodigo'];
    $produto = $_POST['txtproduto'];
    $preco = $_POST['txtpreco'];
    $quantidade = $_POST['txtquantidade'];
    $categoria = $_POST['txtcategoria'];

    $sql = "INSERT INTO tbl_produtos VALUES ('$codigo', '$produto', $preco, $quantidade, $categoria)";

    mysqli_query($conn, $sql);

    $resposta = mysqli_affected_rows($conn);

    if($resposta == 1){
        echo("Registro inserido com Sucesso!<br><br>");
    }else{
        echo("Erro ao executar no banco!<br><br>");
    }

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 31 | COMANDO INSERT COM FORMULÁRIO </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <a href="formAula31.php">Voltar</a>
</body>
</html>