<?php require_once 'Desconto.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cálculo de Desconto</title>
</head>

<body>
    <h2>Calculadora de Desconto</h2>
    <form method="post">
        <label>Nome do Produto: <input type="text" name="nomeProduto" required></label><br><br>
        <label>Tipo de Cliente (comum/premium): <input type="text" name="tipoCliente" required></label><br><br>
        <label>Quantidade: <input type="number" name="quantidade" required></label><br><br>
        <label>Preço Unitário: <input type="number" name="precoUnitario" required></label><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $desc = new Desconto(
            nomeProduto: $_POST['nomeProduto'],
            tipoCliente: $_POST['tipoCliente'],
            quantidade: $_POST['quantidade'],
            precoUnitario: $_POST['precoUnitario']

        );

        echo "<h3>Resultado:</h3>";
        echo $desc->calcular((string) $_POST['nomeProduto']);
    }
    ?>
</body>

</html>