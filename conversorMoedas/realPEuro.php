<?php require_once "conversor.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real para dollar</title>
</head>

<body>

    <form method="post">
        <label>R$ <input type="number" name="moedaReais" required></label><br><br>
        <label>Cotação do Euro: <input type="number" step="0.01" name="cotacaoEuro" required></label><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $conv = new Conversor();


        $moeda = $_POST['moedaReais'];
        $conv->setEscolha('euro');
        $conv->setMoedaEuro($_POST['cotacaoEuro']);
        $conv->setMoeda($moeda);


        echo "<h3>Resultado:</h3>";
        echo $conv->converter($conv->getEscolha());
    }
    ?>

</body>

</html>