<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 31 | COMANDO INSERT COM FORMULÁRIO </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form action="aula31.php" method="post" name="frmaula31">
        <label> código </label><br>
        <input type="text" name="txtcodigo" size="40" maxlength="30"><br><br>

        <label> Produto </label><br>
        <input type="text" name="txtproduto" size="60" maxlength="50"><br><br>

        <label> Preço </label><br>
        <input type="text" name="txtpreco" size="10"><br><br>

        <label> Quantidade </label><br>
        <input type="text" name="txtquantidade" size="10"><br><br>

        <label> Categoria </label><br>
        <input type="text" name="txtcategoria" size="5"><br><br>

        <input type="submit" value="Enviar">

        <input type="reset" value="Limpar">
    </form>
</body>
</html>