<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POO</title>
    </head>
    <body>
        <div>
            <form action="#" method="post">
                <label for="num1">Nº 1</label>
                <input type="text" name="num1" id="num1" value="<?php echo $n1;?>">
                <label for="num2">Nº 2</label>
                <input type="text" name="num2" id="num2" value="<?php echo $n2;?>">
                <label for="operacao">Operação</label>
                <select name="operacao"  id="operacao">
                    <option value="soma">Somar</option>
                    <option value="subtracao">Subtracação</option>
                    <option value="multiplicacao">Multiplicação</option>
                    <option value="divisao">Divisão</option>
                </select>
                <input type="submit" value="Calcular">
            </form>
        </div>
        <div>Resultado: <?php echo $resultado ?></div>
    </body>
</html>