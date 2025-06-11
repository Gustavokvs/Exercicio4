<?php require_once 'calculadora.php'; ?>




<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circulo</title>
</head>

<body>
    <form method="post">

        <label>Raio: <input type="float" name="raio" step="0.1" required> </label><br><br>


        <button type="submit">calcular</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $calc = new CalculadoraGeo();
        $calc->setRaio($_POST['raio']);
        $calc->setForma('Circulo');

        echo "<h3>Resultado:</h3>";
        echo "<p>Forma: " . $calc->getForma() . "</p>";

        echo "resultado: " . $calc->calcularCirculo();




    }


    ?>
</body>

</html>