<?php

require 'conexao.php';

$stmt = $bd -> query('SELECT id, descricao FROM tarefas');
$stmt -> execute();

echo "<table border='1'>
    <tr>
        <td>ID</td><td>Descrição</td>
    </tr>";
    
while ($registro = $stmt -> fetch(PDO::FETCH_ASSOC)) //retorna o vetor c/ uma linha da tabela
{
    echo "<tr>
        <td>{$registro['id']}</td>
        <td>{$registro['descricao']}</td>
    </tr>";
}
echo "</table>";
