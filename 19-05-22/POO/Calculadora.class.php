<?php

class Calculadora {
    private ?int $n1; //usar o float ou outros no php 8. (tipo de dado...)
    private ?int $n2;
     
    public function __construct($n1, $n2) { //cria construtor
        $this -> n1 = $n1; //recebe (acessa)
        $this -> n2 = $n2;
    }

    public function soma():int { //retorna inteiro
        return $this->n1 + $this->n2;
    }

    public function subtracao():int {
        return $this->n1 - $this->n2;
    }

    public function __destruct() { //*é executado quando o obj é destruido
        echo 'Show!';
    }
}
/*
--instância
--determinar o tipo de cada atributo
--Visibilidade - controla o encapsulamento

--view private - Acessivel apenas de dentro da própria classe
--view protected - a função pode ser acessado de dentro da propria classe ou 
classe que tenha herdado essa mesma classe
--view public - qualquer um acessa

- O que acontece dentro do metodo é global
- __ é constando 'mágica'

*unset() - destroi qualquer variavel
*/