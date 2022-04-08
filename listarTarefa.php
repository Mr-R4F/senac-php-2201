<?php
/*
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

*/
//Lista
require_once 'conexao.php';

$stmt = $bd->query('SELECT id, descricao FROM tarefas');
$stmt -> execute();

echo "<form method='post'>
        <table border='1'>
            <tr>
                <td>ID</td><td>Descrição</td><td>Del</td><td>Editar</td>
            </tr>";
    
while ($registro = $stmt -> fetch(PDO::FETCH_ASSOC)) //retorna o vetor c/ uma linha da tabela
{
    echo "<tr>
            <td>
                {$registro['id']}
            </td>
            <td>
                {$registro['descricao']}
            </td>
            <td>
                <button name='id' formaction='apagarTarefa.php' value='{$registro['id']}'>Deletar</button>
            </td>
            <td>
                <button name='id' formaction='editarTarefa.php' value='{$registro['id']}'>Editar</button>
            </td>
        </tr>";
}
echo "</table>
        </form><br><a href='formTarefa.html'></a>";