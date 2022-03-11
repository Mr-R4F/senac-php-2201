<?php

//ler o arquivo e mostrar.

$f = fopen('guardaDados.csv', 'r');

echo "<a href='menu.php'>Voltar</a>";

echo "<table border='1'>
        <tr>
            <td>Nome</td><td>Num</td>
        </tr>";

while ($linha = fgets($f)) //usar um loop
{

    $campos = explode(';', $linha); //separa a string e retorna num vetor
    $nome = $campos[0];
    $num2 = $campos[1];

    echo "<tr>
            <td>$nome</td><td>$num2</td>
        </tr>";
}

echo "</table>";