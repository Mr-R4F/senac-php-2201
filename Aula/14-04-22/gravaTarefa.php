<?php
require 'controleDeAcesso.php';
require 'conexao.php';

$tarefa = $_POST['tarefa'];//Dado inseguro 

if($_FILES['figura']['error'] == 0 &&
    $_FILES['figura']['size'] > 0){

    move_uploaded_file($_FILES['figura']['tmp_name'],"imagens/{$_FILES['figura']['name']}");
}

$stmt = $bd->prepare('INSERT INTO tarefas (descricao) VALUES (:tarefa)');

$stmt->bindParam(':tarefa', $tarefa);

if( $stmt->execute())
    echo "$tarefa gravada com sucesso!";
else
    echo "Problema ao gravar $tarefa";

echo "<br><a href='formTarefa.php'>Voltar</a>";