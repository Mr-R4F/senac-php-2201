<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table border='1'>
            <tr>
                <td>ID</td>
                <td>Tarefa</td>
                <td>Imagem</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <?php
                foreach($excluidos as $excluido) {
                    $img = 'N/D';
                        if (!empty($excluido['imagem'])) #verificar se existe imagem
                        {
                            if(is_file($excluido['imagem'])) #verifica se o arquivo existe
                                        $img = "<img src='{$excluido['imagem']}' width='50' height='50'>";
                        }

                    echo "<tr>
                    <td>{$excluido['id']}</td>
                    <td>{$excluido['descricao']}</td>
                    <td>$img</td>
                    <td><button name='id' formaction='lixeira.php?a=r' 
                            value='{$excluido['id']}'>Restaurar</button></td>
                    <td><button name='id' formaction='lixeira.php?a=a' 
                            value='{$excluido['id']}'>Apagar Total</button></td>
                    </tr>";
                }
            ?>
        </table>
    </form>
    <br>
    <a href='index.php'>Menu</a>
</body>
</html>