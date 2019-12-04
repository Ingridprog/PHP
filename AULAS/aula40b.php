<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 40 | LOGIN COM SESSÕES </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['numLogin'])){
            $n1 = $_GET['num'];
            $n2 = $_SESSION['numLogin'];

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

        echo("Bem-Vindo, ".$_SESSION['username']);

        session_destroy();
        
        mysqli_close($conn);
    ?>
</body>
</html>