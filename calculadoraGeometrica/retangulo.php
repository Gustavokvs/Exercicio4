<?php require_once 'calculadora.php'; ?>





<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retangulo</title>
</head>

<body>
    <form method="post">

        <label>Base: <input type="float" name="base" step="0.1" required> </label><br><br>
        <label>Altura: <input type="float" name="altura" step="0.1" required> </label><br><br>


        <button type="submit">calcular</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $calc = new CalculadoraGeo();
        $calc->setBase($_POST['base']);
        $calc->setAltura($_POST['altura']);
        $calc->setForma('Retângulo');

        echo "<h3>Resultado:</h3>";
        echo "<p>Forma: " . $calc->getForma() . "</p>";

        echo "resultado: " . $calc->calcularRetangulo();




    }


    ?>
</body>

</html>