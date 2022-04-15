<?php

require_once 'conexao.php';

$email = $_POST['email']; 
$senha = $_POST['senha']; 

$stmt = $bd -> prepare("SELECT senha FROM usuarios WHERE id = :email");
$stmt -> bindParam(':email', $email); //o val é substituido pelo val. da var.
$stmt -> execute();
$val = $stmt ->fetch(PDO::FETCH_ASSOC); //retorna indices alfa-Nº.

if (password_verify($senha, $val['senha'])) //faz a comparação de senhas (senha, *val* é o hash)) respectivamente.
    header('location: index.php');
else
    echo "Inválido!";
