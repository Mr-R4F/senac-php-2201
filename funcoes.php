<?php

function cadastraAluno(array $aluno):bool 
{
    $f = fopen('alunos.csv', 'a');
    $escreveu = fwrite($f, "{$aluno['matricula']}; \"{$aluno['nome']}\n");
    fclose($f);

    if ($escreveu)
        return true;
    else
        return false;
}

$funcionou = cadastraAluno(['matricula' => 98237, 'nome' => 'Isonequex']);

if($funcionou)
    echo "<br>Aluno cadastrado c/ sucesso!";
else
    echo "<br>Erro ao cadastrar o aluno!"; 


