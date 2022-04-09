<?php

require 'conexao.php';

$tarefa = $_POST['tarefa'];

$stmt = $bd -> prepare('INSERT INTO tarefas (descricao) VALUES (:tarefa)');

$stmt -> bindParam(':tarefa', $tarefa);

if ($stmt->execute())
    echo "$tarefa gravada com sucesso!";
else
    echo "Problema ao gravar $tarefa";

echo "<br><a href='formTarefa.html'>Voltar</a>";