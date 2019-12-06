<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title> AULA 33 | COMANDO SELECT </title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Cógigo</td>
                <td>Produto</td>
                <td>Quantidade</td>
                <td>Preço</td>
                <td>Categoria</td>
            </tr>
            <?php
                include "../conexao.inc";

                $cat1 = $_POST['txtcat1'];
                $cat2 = $_POST['txtcat2'];

                $sql = "SELECT * FROM tbl_produtos WHERE categoria = $cat1 OR categoria = $cat2";

                // retorna um array, onde cada registro está em um índice
                $result = mysqli_query($conn, $sql);

                // a cada iteração tranforma o índice de $result em outro array onde estão os campos do registro
                while($registro = mysqli_fetch_row($result)){
                    $codigo = $registro[0];
                    $produto = $registro[1];
                    $preco = $registro[2];
                    $quantidade = $registro[3];
                    $categoria = $registro[4];

                    echo("<tr>");
                        echo("<td>$codigo</td>
                            <td>$produto</td>
                            <td>$preco</td>
                            <td>$quantidade</td>
                            <td>$categoria</td>     
                            ");
                    echo("</tr>");
                }
                mysqli_close($conn);
            ?>
        </table>
    </body>
</html>