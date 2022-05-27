<?php
require 'Calculadora.class.php';

class Main { //define classe
    private ?int $num1;
    private ?int $num2;
    private Calculadora $calc;

    public function __construct() { //cria construtor ao definir a classe
        $this -> num1 = isset($_POST['num1']) ? (int) $_POST['num1'] : null;
        $this -> num2 = isset($_POST['num2']) ? (int) $_POST['num2'] : null;
        $this -> calc = new Calculadora ($this -> num1, $this -> num2);

        $resultado = null;
        try {
            $resultado = $this -> operacao();
        } catch (Exception $e) {
            var_dump($e -> getMessage()); //msotra a mensagem de exceção
        }
        $this -> front($this -> num1, $this -> num2, $resultado);
    }

    private function operacao():?float { //cria construtor ao definir a classe
       switch ($_POST['operacao'] ?? '') {
            case 'soma':
               return  $this -> calc -> soma(); //chama a função soma da clase calc.
               break;

            case 'subtracao':
                return $this -> calc -> subtracao();
            break;
           
            default:
               throw new Exception('Não foi possivel executar essa operação'); //se nada for, vem pra isso.
               break;
       }
    }

    private function front(?int $n1, ?int $n2, ?int $resultado = null):void  { //pasar Nº como paramêtro -- //parametro não obrigatório (opcional)-
        include 'front.php';
    }
}
new Main;
//instância
//Uma classe em cada arquivo

//fazer typeCasting pq não é possivel atribuir nulo p/ o array
//retorna nada (void);
// ? retorna algo + não o que está na frente dele
//@ suprime mensagem de erro.

//no php os atributos vão encima