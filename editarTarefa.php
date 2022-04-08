<?php

//edita e atualiza
require_once 'conexao.php';

$id = preg_replace('/\D/', '', $_POST['id']);

if (isset($_POST['tarefa'])) #atualiza o registro - se estiver definido/set ...
{
    $stmt = $bd -> prepare('UPDATE tarefas SET descricao = :descricao WHERE id = :id'); //label que vai ser substituida 
    $stmt -> bindParam(':descricao', $_POST['tarefa']);
    $stmt -> bindParam(':id', $id); 


    if ($stmt ->execute())
        echo "Tarefa atualizada";
    else
       echo "Erro a atualizar a tarefa";
}#Fim atualiza o registro


$stmt = $bd -> query("SELECT descricao FROM tarefas WHERE id = $id"); //pega o resultado.
$stmt -> execute();
$tarefa = $stmt -> fetch(PDO::FETCH_ASSOC);

echo "<form method='post'>
        <label for='tarefa'>Tarefa</label>
        <input type='text' name='tarefa' id='tarefa' value='{$tarefa['descricao']}'> 
        <input type='hidden' name='id' value='$id'>
        <input type='submit' value='Atualizar'>
    </form><a href='listarTarefa.php'>Voltar</a>";
