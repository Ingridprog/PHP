<?php
    session_start();

    if($_SESSION['log'] == "s"){

    $_SESSION['curso'] = "Curso de PHP";

    $nome = $_SESSION['nome'];

    echo($nome."<br/>");

    

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 19 | PÁGINA 01 </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1> Página 01 </h1>    
    <a href="aula19.php" target=_self> Principal </a><br><br>
    <a href="pagina02.php" target=_self> Página 02 </a>
</body>
</html>
<?php
    }else{
        echo("Acesso Negado!");
    }
?>