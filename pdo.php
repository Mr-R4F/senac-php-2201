<?php

#Passa os dados da conexão
$dsn = 'mysql:dbname=php;host=127.0.0.1';
$user = 'root';
$pass = '';

#$bd = new PDO('mysql:dbname=php;host=127.0.0.1', 'root', ''); //Conecta c/ o banco de dados.
$bd = new PDO('mysql:dbname=php;host=127.0.0.1', 'root', ''); //Conecta c/ o banco de dados.
#Fim do banco

#formas de INSERT
/*
$inseriu = $bd->exec('INSERT INTO tarefas (descricao) VALUES ("Tarefa inserida via PHP")');

if($inseriu) #Insere dados - retorna val. bol se for F.
    echo "GRAVOU";
else 
    echo "Ai meu Deus!";
*/

/*
#INSERT
if($bd->exec('INSERT INTO tarefas (descricao) VALUES ("Tarefa inserida via PHP")')) #Insere dados
    echo "GRAVOU";
else 
    echo "Ai meu Deus!";
#FIM INSERT
*/

#Formas do DELETE

#DELETE
if($bd->exec('DELETE FROM tarefas WHERE id = 14')) #Remove dados
    echo "GRAVOU";
else 
    echo "Ai meu Deus!";
#FIM DO DELETE

/*
#DELETE
if($bd->exec('DELETE FROM tarefas WHERE id =  ?'))
    echo "GRAVOU";
else 
    echo "Ai meu Deus!";
#FIM DELTE
*/

