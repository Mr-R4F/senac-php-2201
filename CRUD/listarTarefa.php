<?php
require 'conexao.php';
require 'controleDeAcesso.php';

$stmt = $bd->query('SELECT id, descricao FROM tarefas');

$stmt->execute();

echo "<a href='formTarefa.php'>+ Nova Tarefa</a>
        <form method='post'>
        <table border='1'>
        <tr>
            <td>ID</td><td>Tarefa</td><td>&nbsp;</td><td>&nbsp;</td>
        </tr>";

while($reg = $stmt->fetch(PDO::FETCH_ASSOC)){

    echo "  <tr>
                <td>{$reg['id']}</td>
                <td>{$reg['descricao']}</td>
                <td><button name='id' formaction='editarTarefa.php' 
                        value='{$reg['id']}'>Editar</button></td>
                <td><button name='id' formaction='apagarTarefa.php' 
                        value='{$reg['id']}'>Apagar</button></td>
            </tr>";
}

echo "<table></form><br><a href='formTarefa.php'>MENU</a>";