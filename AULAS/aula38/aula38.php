<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 38 | COMANDO UPDATE </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php
        include "../conexao.inc";

        $sql = "UPDATE tbl_cadastro SET telefone = '(11)3683-3077' WHERE codigo = 2";

        $res = mysqli_query($conn, $sql);

        if($res){
            echo("Registro alterado com sucesso!");
        }else{
            echo("Falha ao editar registro!");
        }

        mysqli_close($conn);
    ?>
</body>
</html>