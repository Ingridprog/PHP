<?php
    class Carro{
        // Propriedades
        var $tipo; // 1= Passeio 2= Esporte 3= Utilitário
        var $velocidadeMaxima;
        var $nome;
        var $liga;
        var $velocidade;

        // Método construtor - automaticamente executado ao instanciar um objeto, mesmo nome da classe*
        function Carro($tp, $no){

            // inicia com o carro desligado - this se refere a classe, aponta para a propriedade $liga da classe
           $this->liga = false;

           // nome
           $this ->nome = $no;

           // quando o carro é criado a velocidade é 0
           $this ->velocidade = 0;

            // definindo o tipo
           // definindo a velocidade maxima de acordo com o tipo 
           if($tp == 1){
               $this ->velocidadeMaxima = 160;
               $this ->tipo = "Passeio";
           }elseif($tp == 2){
               $this ->velocidadeMaxima = 300; 
               $this ->tipo = "Esporte";
           }else{
               $this ->velocidadeMaxima = 100;
               $this ->tipo = "Utilitário";
           }

        }

        // método para ligar o carro
        function ligar(){
            $this ->liga = true;
        }

        // método para desligar o carro
        function desligar(){
            $this ->liga = false;
        }

        // método velocidade
        function velocidade($vel){
            if($vel > $this ->velocidadeMaxima){
                $this ->velocidade = $this ->velocidadeMaxima;
            }else{
                $this ->velocidade = $vel;
            }
        }

        // método para listar as características do carro
        function id(){
            echo("<hr>");
            echo("Nome do Carro: ".$this->nome);
            echo("<br/> Tipo do Carro: ".$this->tipo);
            echo("<br/> Velocidade máxima do Carro: ".$this->velocidadeMaxima);
            echo("<br/> Velocidade atual: ".$this->velocidade);
            if($this->liga){
                echo("<br/> Carro Ligado!");
            }else{
                echo("<br/> Carro Desligado!");
            }
        }
    }

    // Criando objetos
    $carro1 = new Carro (2, "Rapid");
    $carro2 = new Carro(3, "Carregador");
    $carro3 = new Carro(1, "Basic");

    $carro1->ligar();
    $carro2->velocidade(80);

    $carro1-> id();
    $carro2-> id();
    $carro3-> id();
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