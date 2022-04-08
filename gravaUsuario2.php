<?php

require 'conexao.php';

$email = $_POST['email']; 
$nome = $_POST['nome']; 
$senha = $_POST['senha']; 
$confirmacaoSenha = $_POST['confirmacao_senha']; 

if ($senha != $confirmacaoSenha)
{
    echo "A senha não confere com sua confirmação<br>
        <a href='formUsuario.php></a>'";
    
    exit();
}

$senha = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $bd -> prepare('INSERT INTO usuario (id, nome, senha) VALUES (:id, :nome, :senha)');
$stmt -> bindParam(':id', $email); 
$stmt -> bindParam(':nome', $nome); 
$stmt -> bindParam(':senha', $senha); 

if ($stmt->execute())
    echo "$nome gravado com sucesso";
else
    echo "Problema ao gravar o $nome";

echo "<a href='formUsuario.html'>Voltar</a>";
