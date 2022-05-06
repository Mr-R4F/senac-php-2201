<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') { //padrão do php e vem me vetor - se o requisitante usar o GET

    $stmt = $bd->query('SELECT id, descricao, imagem FROM tarefas WHERE apagado = 0');

    $stmt -> execute();
    $saida = [];

    while($registro = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        $saida[] = $registro;
    }
    echo json_encode($saida);
    http_response_code(200); //função que retorna um código http de erro
    exit();
}

//Retorna código de erro não permitido
http_response_code(405);