<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 45 | REVISÃO FORMULÁRIO x BANCO DE DADOS </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form action="aula45.php" method="post" name="frmAula45">
        <label> Nome: </label><br>
        <input type="text" value="" name="txtnome" size="30" maxlenght="30" ><br><br>

        <label> Senha: </label><br>
        <input type="password" value="" name="txtsenha" size="20" maxlenght="20"><br><br>

        <label> Sexo: </label><br>
        <input type="radio" value="f" name="rdosexo" checked="checked"> Feminino <br>
        <input type="radio" value="m" name="rdosexo"> Masculino <br><br>

        <label> Esporte </label><br>
        <select name="sltesporte">
            <option value="futebol">futebol</option>
            <option value="basquete">basquete</option>
            <option value="volei">volei</option>
            <option value="lutas">lutas</option>
            <option value="outros">outros</option>
        </select><br><br>

        <label> Meios de transportes utilizados no dia a dia: </label><br>
        <input type="checkbox" name="ckdcarro" value="1">Carro <br>
        <input type="checkbox" name="ckdmoto" value="1">Moto <br>
        <input type="checkbox" name="ckdonibus" value="1">Ônibus <br>
        <input type="checkbox" name="ckdtrem" value="1">Trem <br> <br>

        <label> Comentários: </label><br>
        <textarea name="txtcomentario" cols="50" rows="5"></textarea><br><br>

        <input type="submit" name="btnenvia" value="Enviar">
    </form>
</body>
</html>