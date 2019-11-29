<?php
    // static - o atributo passa a pertencer a classe, pois usará apenas um endereço de memória
    class Carro{
        public $cor;
        public static $velocidade = 0;

        function carro($cor){
            $this->cor = $cor;
        }

        function status(){
            echo("<hr>");
            echo("Cor: ".$this->cor);
            echo("<br/>Velocidade: ".self::$velocidade);
            echo("<hr>");
        }
    }

    $carro1 = new Carro("vermelho");
    $carro2 = new Carro("verde");
    $carro3 = new Carro("azul");

    $carro1->status();
    $carro2->status();
    $carro3->status();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 24 | CLASSES PART 05 (static) </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    
</body>
</html>