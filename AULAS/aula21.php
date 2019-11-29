<?php
    class Aula{
        var $var1 = "Boa noite";
        var $var2 = "Ingrid";
        var $var3 = "www.webveste.com.br";

        function escreve(){
            echo("<br/> Método da classe Aula");
            echo("<br/>".$this->var1);
            echo("<br/>".$this->var2);
            echo("<br/>".$this->var3);
            echo("<hr>");
        }
    }

    // classe que vai herdar da primeira
    class Curso extends Aula{
        var $curso = "PHP";
        var $ano = 2019;
        var $aula = "AULA 21 - Classes";

        function escreve2(){
            echo("<br/> Método da classe Curso");
            echo("<br/>".$this->curso);
            echo("<br/>".$this->ano);
            echo("<br/>".$this->aula);
            echo("<hr>");
        }
    }

    $aulaObj = new Aula();
    $aulaObj->escreve();

    $cursoOnj = new Curso();
    $cursoOnj->escreve();
    $cursoOnj->escreve2();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 21 | CLASSES PART 02 (Herança) </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    
</body>
</html>