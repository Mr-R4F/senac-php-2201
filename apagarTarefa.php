<?php

require_once 'conexao.php';

//apagar itens do banco - evita o sql injection.
$id = preg_replace('/\D/', '',$_POST['id']); #espera receber uma expressão regular e o que espera que seja colocado no lugar -- tudo que não for digito faz algo - elimina tudo que não é numero.

if($bd->exec("DELETE FROM tarefas WHERE id = $id"))
    echo "Tarefa apagada com sucesso";
else    
    echo "Erro ao tentar apagar a tarefa!";

echo "<br><br><a href='listarTarefa.php'>Voltar</a>";
