<?php
require_once 'conexao.php';

$id = preg_replace('/\D/', '', $_POST['id']);

/* era
if($bd->exec("DELETE FROM tarefas WHERE id = $id")){

    echo "Tarefa apagada com sucesso! ";

}else{

    echo "Erro ao tentar apagar a tarefa!";
}
*/

// para remover, mas não do banco
if($bd->exec("UPDATE tarefas SET apagado = 1 WHERE id = $id")){

    echo "Tarefa apagada com sucesso! ";

}else{

    echo "Erro ao tentar apagar a tarefa!";
}
echo "<br><br><a href='listarTarefa.php'>Voltar</a>";