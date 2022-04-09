<?php

$nome = $_POST['nome']; 
$num = $_POST['num'];

//$num = ($num > 200) ? 200 : $num; //estabelece limite;
//echo "Bem-vindo, $nome";

for ($i = 0; $i < $num && $i < $num; $i++) //estabelece limite;
{
    echo "$nome<br>";
    //if ($i > 200) break; //estabelece limite;
}

//grava no arquivo
$f = fopen('guardaDados.csv', 'a');
fwrite($f, "$nome; $num \r\n"); //quebra de linha \r\n.
fclose($f);

//bitbucket.org/senac-tsi-php/senac-php-2201/branch/aula/10-03-2022