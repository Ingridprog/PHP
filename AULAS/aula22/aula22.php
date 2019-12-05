<?php
    // não poderá ser instanciada - serve para outras classes herdar
    abstract class CarroBase{
        public $potencia;
        public $velocidadeMaxima;
        public $portas;
        public $liga = false;

        function ligar(){
            $this->liga = true;
        }

        function desligar(){
            $this->liga = false;
        }

        function status(){
            echo("<hr>");
            echo("Potência: ".$this->potencia);
            echo("<br/> Velocidade Máxima: ".$this->velocidadeMaxima);
            echo("<br/> Portas: ".$this->portas);
            if($this->liga){
                echo("<br> Carro Ligado!");
            }else{
                echo("<br> Carro Desligado!");
            }
            echo("<hr>");
        }

        //método abstrato 
        abstract function teste();
    }

    class Carro extends CarroBase{
        function carro($pt, $vm, $po){
            $this->potencia = $pt;
            $this->velocidadeMaxima = $vm;
            $this->portas = $po;

            $this->status();
        }

        function teste(){}
    }

    $carro1 = new Carro(150, 280, 4);
    $carro1->ligar();
    $carro1->status();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 22 | CLASSES PART 03 (abstract) </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    
</body>
</html>