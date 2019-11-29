<?php
    abstract class CarroBase{
        public $cor;
        public $velocidade = 0;

        function carroBase($cor){
            $this->cor = $cor;
        }

        function status(){
            echo("<hr>");
            echo("Cor: ".$this->cor);
            echo("<br/>Velocidade: ".$this->velocidade);
            echo("<hr>");
        }

        // impede que o método seja sobrescrito
        final function cor(){
            echo("<hr>");
            echo("Minha Cor: ".$this->cor);
            echo("<br/> Método Original");  
            echo("<hr>");   
        }
    }

    class Carro extends CarroBase{
        // // vai sobrescrever o outro método
        // function cor(){
        //     echo("<br/> Cor: ".$this->cor);
        // }
    }

    class Transp extends CarroBase{
    
    }

    $carro1 = new Carro("Vermelho");
    $carro2 = new Transp("Azul");

    $carro1->cor();
    $carro2->cor();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 25 | CLASSES PART 06 (final) </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    
</body>
</html>