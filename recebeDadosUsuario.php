<?php 
    
$aluno = $_POST['aluno'];
$matricula = $_POST['matricula'];

//include não dá erro fatal. - inclui um php externo
//require dá erro fatal.
//require 'funcoesAluno.php'; 
require_once 'funcoesAluno.php';

if (cadastraAluno(['matricula' => $matricula, 'nome' => $aluno]))
    echo "$aluno, você foi matriculado(a) com sucesso!";
else
    echo "$aluno, alguma coisa deu errado :-(";

echo "<br><br><a href='dadosUsuario.php'>Cadastrar outro</a>
    <a href='listarUsuarios.php'>Listar alunos</a>";