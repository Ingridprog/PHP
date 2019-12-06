<?php
    include "../conexao.inc";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 36 e 37 | DELETANDO ITENS SELECIONADOS </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form action="aula36E37.php" method="post" name="frmaula36">
        <table border="1">
            <tr>
                <td>Códido</td>
                <td>Nome</td>
                <td>Selecionar</td>
            </tr>
            <?php
                // apaga os registros selecionados
                if(isset($_POST['sel'])){
                    foreach($_POST['sel'] as $codigo){
                        $sql = 'DELETE FROM tbl_cadastro WHERE codigo ='.$codigo;
                        $res = mysqli_query($conn, $sql);   
                    }
                }

                $sql = 'SELECT * FROM tbl_cadastro ORDER BY codigo';

                $res = mysqli_query($conn, $sql);

                while($registro = mysqli_fetch_row($res)){
                    $codigo = $registro[0];
                    $nome = $registro[1];

                    echo("<tr>");
                        echo("<td>$codigo</td>");
                        echo("<td>$nome</td>");
                        //quando for selecionado ele guarda no value o código do registro
                        echo("<td align=center>
                                <input type=checkbox value=$codigo name=sel[]>
                            </td>");
                    echo("</tr>");
                }
                mysqli_close($conn);
            ?>
        </table>
        <br>
        <br>
        <input type="submit" value="Excluir" name="btn_excluir">
    </form>
</body>
</html>