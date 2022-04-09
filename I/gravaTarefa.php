<?php

require 'conexao.php'; //conecta no banco

$nome = $_POST['nome']; //info chega - Dados Inseguro

//Prepara a consulta antes da execução.

$stmt = $bd -> prepare('INSERT INTO tarefas (descricao) VALUES (:nome)'); //dado perigoso é colocado aqui //s/ aspas
$stmt -> bindParam(':nome', $nome); //garante que o que vem do usuário (dados perigosos) seja gravado como string, evita o SQL Injection.

/*
//1ª operação

if ($bd->exec("")) //pega a info e joga no banco de dados
    echo "$nome gravado com sucesso";
else
    echo "Problema ao gravar o $nome";
*/

//Executa
if ($stmt->execute())
    echo "$nome gravado com sucesso";
else
    echo "Problema ao gravar o $nome";

echo "<br>";
echo "<a href='form.html'>Voltar</a>";
echo "<br>";
echo "<a href='listarTarefa.php'>Lista</a>";