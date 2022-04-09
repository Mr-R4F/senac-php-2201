<?php

//Conecta
$bd = new PDO('mysql:dbname=php;localhost', 'root', '');
//Fim da conexão

//Atualiza um registro
$editou = $bd -> exec('UPDATE tarefas SET descricao = "funciona" WHERE id = 15');


if($editou)
    echo "GRAVOU";
else 
    echo "NÃO GRAVOU";
