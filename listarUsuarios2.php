<?php

//Lista
require_once 'conexao.php';

$stmt = $bd->query('SELECT id, descricao FROM tarefas');
$stmt -> execute();

echo "<form method='post'>
        <table border='1'>
            <tr>
                <td>E-mail</td><td>Descrição</td><td>Del</td><td>Editar</td>
            </tr>";
    
while ($registro = $stmt -> fetch(PDO::FETCH_ASSOC)) //retorna o vetor c/ uma linha da tabela
{
    echo "<tr>
            <td>
                {$registro['id']}
            </td>
            <td>
                {$registro['nome']}
            </td>
            <td>
                <button name='id' formaction='apagarUsuario.php' value='{$registro['id']}'>Deletar</button>
            </td>
            <td>
                <button name='id' formaction='editarUsuario.php' value='{$registro['id']}'>Editar</button>
            </td>
        </tr>";
}
echo "</table>
        </form><br><a href='formUsuario.html'></a>";