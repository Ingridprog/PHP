<?php
    include "../conexao.inc";


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
    <h1>Pesquisa: </h1>
    <form action="aula44.php" method="post" name="frmaula44">
        <label>Nome: </label><br>
        <input type="text" name="txtnome" value=""><br><br>

        <label> Selecione o seu estado: </label><br>
        <select name="sltuf">
            <?php
                $sql = "SELECT * FROM estados ORDER BY sigla";

                $res = mysqli_query($conn, $sql);

                while($registro = mysqli_fetch_row($res)){

                    $uf = $registro[2];
                    $sigla = $registro[1];
            ?>
                <option value="<?=$sigla?>"><?=$uf?></option>
            <?php
                }
            ?>
        </select><br><br><br>

        <label> Selecione seus meios de transporte favoritos </label><br>
        <?php
            $sql = "SELECT * FROM tbl_transporte ORDER BY transporte";

            $res = mysqli_query($conn, $sql);

            while($registro = mysqli_fetch_row($res)){
                $cod = $registro[0];
                $transp = $registro[1];
        ?>
            <input type="checkbox" name="chktransportes[]" value="<?=$cod?>"><?=$transp?><br>
        <?php
            }
        ?>
        <br><br>
        <input type="submit" value="Gravar Pesquisa" name="btngravarpesquisa"><br><br>
    </form>
</body>
</html>
<?php
    mysqli_close($conn);
?>