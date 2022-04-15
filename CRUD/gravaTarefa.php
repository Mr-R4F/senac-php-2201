<?php
require 'conexao.php';
//require 'controleDeAcesso.php';

$tarefa = $_POST['tarefa'];//Dado inseguro 
//$arqv = $_FILES; //retorna vetor de um arquivo.

if ($_FILES['figura']['erro'] == 0 && $_FILES['figura']['erro']['size'] > 0)
    move_uploaded_file($_FILES['figura']['tmp_name'], "imagens/{$_FILES['figura']['name']}"); //guarda apenas o caminho -!pode ser perigoso,


$stmt = $bd->prepare('INSERT INTO tarefas (descricao) VALUES (:tarefa)');

$stmt->bindParam(':tarefa', $tarefa);

if( $stmt->execute() ){

    echo "$tarefa gravada com sucesso!";
}else{
    echo "Problema ao gravar $tarefa";
}

echo "<br><a href='formTarefa.php'>Voltar</a>";