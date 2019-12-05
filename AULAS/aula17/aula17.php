<?php
    //$aula = "";

    // if(isset($aula)){
    //     echo ("Variável definida!");
    // }else{
    //     echo ("Variável NÃO definida!");
    // }

    if(isset($_POST['txtnome'])){
        $nome = $_POST['txtnome'];
        echo($nome."<br/>");
    }else{
        echo("Formulário NÃO submetido!");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 17 | FUNÇÃO ISSET </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <br><br>
    <form action="aula17.php" name="frmteste" method="post">
        <label> Nome: </label><br>
        <input type="text" name="txtnome"><br><br>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>

<?php
    }
?>