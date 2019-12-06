<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 39 | SISTEMA DE LOGIN </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php
        include "../conexao.inc";

        $user = $_POST['txtusername'];
        $password = $_POST['txtpassword'];

        $sql = "SELECT * FROM tbl_cadastro WHERE username = '$user' AND senha = '$password'";

        $res = mysqli_query($conn, $sql);

        $linha = mysqli_affected_rows($conn);

        if($linha > 0){
            $num = rand(100000, 900000);
            setcookie("numLogin", $num);
            header('location: aula39b.php?num='.$num);
        }else{
            echo("Usuário ou senha incorreto! <br/><br/>");
            echo("<a href=formAula39.php> VOLTAR </a>");
        }

        mysqli_close($conn);
    ?>
</body>
</html>