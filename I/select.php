<?php

//Conecta
$bd = new PDO('mysql:dbname=php;localhost', 'root', '');
//Fim da conexão

//pegar tudo do banco

#cria a consulta

//$stmt = $bd -> query('SELECT id, descricao FROM tarefas') -> fetchAll(); // faz a consulta e recupera os dados.
$stmt = $bd -> query('SELECT id, descricao FROM tarefas');

#executa a consulta
$stmt -> execute();

#p/ chegar nos dados (recupera)
$registro = $stmt -> fetch(PDO::FETCH_ASSOC); //Retorna em vetor, onde os indices são as colunas - recupera um único registro  // sempre que chamado mostra a próxima linha
//$registro = $stmt -> fetchAll(); //mostra todos os dados.

//Loop p/ mostrar tudo

/*
foreach ($registro as $value) {
    echo $value['descricao'];
}
*/

echo "<table border='1'>
    <tr>
        <td>ID</td><td>Descrição</td>
    </tr>";
    
while ($registro = $stmt -> fetch(PDO::FETCH_ASSOC)) //retorna o vetor c/ uma linha da tabela
{
    echo "<tr>
        <td>{$registro['id']}</td>
        <td>{$registro['descricao']}</td>
    </tr>";
}
echo "</table>";