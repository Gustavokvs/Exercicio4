<?php require_once 'Carro.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cálculo de Carro</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    <h2>Calculadora de Autonomia e Revisão</h2>
    <form method="post">
        <label>Modelo: <input type="text" name="modelo" required></label><br><br>
        <label>Combustível (etanol/gasolina): <input type="text" name="combustivel" required></label><br><br>
        <label>Tanque cheio (litros): <input type="number" name="tanqueCheio" required></label><br><br>
        <label>Consumo (km/l): <input type="number" name="consumo" required></label><br><br>
        <label>Km rodados desde última revisão: <input type="number" name="kmRodados" required></label><br><br>
        <label>Preço do combustível (R$ por litro): <input type="number" name="precoCombustivel"
                required></label><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $carro = new Carro(
            $_POST['modelo'],
            $_POST['combustivel'],
            (float) $_POST['tanqueCheio'],
            (float) $_POST['consumo'],
            (float) $_POST['kmRodados'],
            (float) $_POST['precoCombustivel']
        );

        echo "<h3>Resultado:</h3>";
        echo $carro->resumo();
    }
    ?>
</body>

</html>