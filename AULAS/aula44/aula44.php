<?php
    include  "../conexao.inc";

    $nome = $_POST['txtnome'];
    $uf = $_POST['sltuf'];

    $transporte = array(0,0,0,0);

    echo("Nome: $nome <br>");
    echo("UF: $uf <br>");
    echo("Transportes selecionados:<br>");

    foreach($_POST['chktransportes'] as $tra){
        $transporte[$tra - 1] = 1;
        echo($tra."<br>");
    }

    $sql = "INSERT INTO tbl_pesquisa VALUES(null, '$nome', '$uf', 
    '$transporte[0]', '$transporte[1]', '$transporte[2]', '$transporte[3]')";

    if(mysqli_query($conn, $sql)){
        echo("Pesquisa gravada");
    }else{
        echo($sql);
    }



    

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 44 | FORMULÁRIO COM MÚLTIPLAS TABELAS </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>

</body>
</html>