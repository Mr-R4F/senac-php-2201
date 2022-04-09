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


//$Usuario ['nome'] = 'Luiz';
//$Usuario ['senha'] = '123';

$Usuario[0] = [
   'nome' => 'Luiz',
   'senha' => '123'];

$Usuario[1] = [
   'nome' => 'Fer',
   'senha' => '321'];

$Usuario[2] = [
   'nome' => 'Bono',
   'senha' => '627'];

echo "<pre>\n\n";
/*
echo '<table border="1px">
   <tr>
      <td>ID</td><td>Nome</td><td>Senha</td>
   </tr>';

foreach ($Usuario as $id => $valor) //p / loop no vetor [p/ cada item do vetor faz algo]/ transforma numa váriável / diminui 1 nivel ov etor -->
{// a cada intereção vai ser como ..
   echo '<tr>';
   echo "<td>$id</td><td>{$valor['nome']}</td><td>{$valor['senha']}</td>";
   echo '</tr>';
}
echo '</table>';
*/
$dias = [ //
   'Dom' => ['Domingo', 'Domingo'],
   'Seg' => ['Segunda', 'Segunda-feira'],
   'Ter' => ['Terça' , 'Terça-feira'],
   'Qua' => ['Quarta', 'Quarta-feira'],
   'Qui' => ['Quinta', 'Quinta-feira'],
   'Sex' => ['Sexta', 'Sexta-feira'],
   'Sáb' => ['Sábado', 'Sábado']];

/*
   foreach ($dias as $i => $value) 
   {
      echo "$i | {$value[0]} {$value[1]}<br>";
   }
*/

   foreach ($dias as $i => [$valor1, $valor2]) 
   {
      echo "$i | $valor1 $valor2<br>";
   }



















/*foreach ($Usuario as $id => $valor):?> <!--p / loop no vetor [p/ cada item do vetor faz algo]/ transforma numa váriável / diminui 1 nivel ov etor -->

   <tr>
   <td style> <?php $id {$valor['nome']} {$valor['senha']}?> <br></td>";
   </tr>';
<?php endforeach; ?>

echo '</table>';
   */