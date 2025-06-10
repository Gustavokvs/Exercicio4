<?php require_once 'imc.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calcular IMC</title>
</head>

<body>
    <h2>Calcular IMC</h2>

    <form method="post">
        <label>Peso(em KG): <input type="number" name="peso" step="0.01" required></label><br><br>
        <label>Altura: <input type="number" name="altura" step="0.01" required></label><br><br>


        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $imc = new Imc();
        $imc->setPeso($_POST['peso']);
        $imc->setAltura($_POST['altura']);

        echo $imc->calcularIMC();
    }
    ?>
</body>

</html>