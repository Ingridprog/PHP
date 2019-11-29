<?php
    interface CarroPadrao{
        function ligar();
        function desligar();
        function status();
        function acelerar();
        function freiar();
    }

    interface CarroGuerra{
        function atirarCanhao();
        function atirarMetralhadora();  
    }

    abstract class CarroBase implements CarroPadrao, CarroGuerra{
        public $potencia;
        public $vm;
        private $liga = false;

        function ligar(){
            $this->liga = true;
        }

        function desligar(){
            $this->liga = false;
        }

        function status(){
            echo("<hr>");
            echo("Potência: ".$this->potencia);
            echo("<br/>Velocidade Máxima: ".$this->vm);
            if($this->liga){
                echo("<br/> Carro Ligado!");
            }else{
                echo("<br/> Carro Desligado!");
            }
            echo("<hr>");
        }

        function acelerar(){}

        function freiar(){}

        function atirarCanhao(){}
        
        function atirarMetralhadora(){} 

    }

    class Carro extends CarroBase{
        function carro($pt, $vm){
            $this->potencia = $pt;
            $this->vm = $vm;
        }
    }

    $carro1 = new Carro(150, 300);
    $carro1->ligar();
    $carro1->status();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 23 | CLASSES PART 04 (interface) </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    
</body>
</html>