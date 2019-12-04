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
        if(isset($_COOKIE['numLogin'])){
            $n1 = $_GET['num'];
            $n2 = $_COOKIE['numLogin'];

            if($n1 != $n2){
                echo("Login não efetuado!");
                exit;
            }
        }else{
            if($n1 != $n2){
                echo("Login não efetuado!");
                exit;
            }  
        }

        include "conexao.inc";

        echo("Página Inicial");

        mysqli_close($conn);
    ?>
</body>
</html>