<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <a href='menu.php'>Voltar</a>
    <form action="recebeDados.php" method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <br><br>
        <input type="number" name="num" placeholder="Digite seu num">
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>