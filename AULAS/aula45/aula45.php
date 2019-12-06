<?php
    include "../conexao.inc";

    $nome = $_POST['txtnome'];
    $senha = $_POST['txtsenha'];
    $sexo = $_POST['rdosexo'];
    $esporte = $_POST['sltesporte'];
    
    if(isset($_POST['ckdcarro'])){
        $carro = $_POST['ckdcarro']; // value = 1
    }else{
        $carro = 0;
    }

    if(isset($_POST['ckdmoto'])){
        $moto = $_POST['ckdmoto'];
    }else{
        $moto = 0;
    }
    
    if(isset($_POST['ckdonibus'])){
        $onibus = $_POST['ckdonibus'];
    }else{
        $onibus = 0;
    }
    
    if(isset($_POST['ckdtrem'])){
        $trem = $_POST['ckdtrem'];
    }else{
        $trem = 0;
    }
    
    $comentario = $_POST['txtcomentario'];

    $sql = "INSERT INTO tbl_revisao VALUES(null, '$nome', '$senha', '$sexo', 
        '$esporte', '$carro', '$moto', '$onibus', '$trem', '$comentario')";

    if(mysqli_query($conn, $sql)){
        echo("Cadastro Registrado <br><br>");
    }else{
        echo("Erro ao cadastrar registro <br><br>");   
        echo($sql);
    }

    echo("<a href=formAula45.php> VOLTAR </a>");

    mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 45 | REVISÃO FORMULÁRIO x BANCO DE DADOS </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>

</body>
</html>