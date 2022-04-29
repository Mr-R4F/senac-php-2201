<?php
require 'conexao.php';
require 'controleDeAcesso.php';

$stmt = $bd->query('SELECT id, descricao, imagem FROM tarefas WHERE apagado = 0');

$stmt->execute();

echo "<a href='formTarefa.php'>+ Nova Tarefa</a>
        <form method='post'>
        <table border='1'>
        <tr>
            <td>ID</td><td>Tarefa</td><td>Imagem</td><td>&nbsp;</td><td>&nbsp;</td>
        </tr>";

while($reg = $stmt->fetch(PDO::FETCH_ASSOC)){

        $img = 'N/D';
        if (!empty($reg['imagem'])) #verificar se existe imagem
        {
                if(is_file($reg['imagem'])) #verifica se o arquivo existe
                        $img = "<img src='{$reg['imagem']}' width='50' height='50'>";
        }

    echo "<tr>
                <td>{$reg['id']}</td>
                <td>{$reg['descricao']}</td>
                <td>$img</td>
                <td><button name='id' formaction='editarTarefa.php' 
                        value='{$reg['id']}'>Editar</button></td>
                <td><button name='id' formaction='apagarTarefa.php' 
                        value='{$reg['id']}'>Apagar</button></td>
            </tr>";
}

echo "<table></form><br><a href='formTarefa.php'>MENU</a>";