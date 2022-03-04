<?php

function cadastraAluno(array $aluno):bool 
{
    $f = fopen('dados.csv', 'a');
    $escreveu = fwrite($f, "{$aluno['matricula']}; \"{$aluno['nome']}\n");
    fclose($f);

    if ($escreveu)
        return true;
    else  
        return false;
}

function listarAluno():array //lê do banco de dados e mostra na tela
{

    $aluno = [];

    $f = fopen('dados.csv', 'r');

    while($linha = fgets($f)) //cada vez que é chamado pega a próxima linha
    {
        var_dump($linha);
        echo "<br>"; //retornar num vetor.
    }

    return $aluno;
}