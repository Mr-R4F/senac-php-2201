<?php

//Comentário de linha

/*
Comentário de bloco
*/

define('XPTO' , 'valor semrpe igual');

echo XPTO;

$num = 2;

$var = "<br>" . "Olá mundo! $num"; //o ponto é o operador de concatenação

echo $var;

echo '<br><br><h1>Vamos tomar café!</h1>';

//var_dump($var);

//phpinfo(); Informações Importantes, como váriaveis de ambiente

//Após o café..

$domingo = 'Domingo';
$segunda = 'Segunda-feira';
$terca = 'Terça-feira';
$quarta = 'Quarta-feira';
$quinta = 'Quinta-feira';
$sexta = 'Sexta-feira';
$sabado =  'Sabado';
$domingo =  'Domingo';

$diaSemana = array(  //1º indice => Valor.
  'Dom' => 'Domingo',  //Primeiro
  'Seg' =>'Segunda-feira',
  'Ter' =>'Terca-feira',
  'Qua' => 'Quarta-feira',
  'Qui' =>'Quinta-feira',
  'Sex' => 'Sexta-feira',
  'Sab' =>'Sabado',
);

$Contatos = [
   'Leo' ,
   'Vinicius' ,
   'Luana'
];

echo '<br>Hoje é ' . $diaSemana[10]; //Exemplo s/ interpolação.

echo "<br>Hoje é {$diaSemana['Qui']}"; //Exemplo c/ interpolação.

$Usuario[0] = [
   'nome' => 'Luiz',
   'senha' => '123'
];

$Usuario[1] = [
   'nome' => 'Fer',
   'senha' => '321'
];

$Usuario[2] = [
   'nome' => 'bono',
   'senha' => '627'
];


//$Usuario ['nome'] = 'Luiz';
//$Usuario ['senha'] = '123';

echo "<pre>\n\n";

var_dump($Usuario);