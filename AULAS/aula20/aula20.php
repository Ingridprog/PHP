<?php
    class Carro{
        //Propriedades
        var $tipo; // 1=Passeio 2=Esporte 3=Utilitário
        var $velocidadeMaxima;
        var $nome;
        var $liga;
        var $velocidade;

        //Métodos

        //Construtor - executa quando instancia a classe
        function carro($tp, $no){
            // vai iniciar desligado
            $this->liga = false;

            $this->nome = $no;

            $this->velocidade = 0;

            if($tp == 1){

                $this->tipo = "Passeio";

                $this->velocidadeMaxima = 160;

            }elseif($tp == 2){

                $this->tipo = "Esporte";

                $this->velocidadeMaxima = 300;

            }else{
                $this->tipo = "Utilitário";

                $this->velocidadeMaxima = 100;

            }
        }

        // Ligar o Carro
        function ligar(){
            $this ->liga = true;
        }

        // Desligar o Carro
        function desligar(){
            $this->liga = false;
        }

        // Velocidade
        function velocidade($vel){
            if($vel > $this->velocidadeMaxima){
                $this->velocidade = $this->velocidadeMaxima;
            }else{
                $this->velocidade = $vel;
            }
        }

        // lista 
        function lista(){

            echo("<hr>");

            echo("Nome do Carro: ".$this->nome."<br/>");

            echo("Tipo do Carro: ".$this->tipo."<br/>");

            echo("Velocidade máxima do Carro: ".$this->velocidadeMaxima."<br/>");

            echo("Velocidade atual: ".$this->velocidade."<br/>");
            
            if($this->liga){

                echo("Carro Ligado <br/>");

            }else{

                echo("Desligado <br/>");
            }

            
        }
    }

    //criando objeto
    $carro1 = new Carro(2, "Rapit");
    $carro2 = new Carro(3, "Carregador");
    $carro3 = new Carro(1, "Basic");

    // Chama um método
    $carro1->ligar();
    $carro3->velocidade(100);
    $carro1->lista();
    $carro2->lista();
    $carro3->lista();

   
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> AULA 20 | CLASSES PART 01 </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    
</body>
</html>