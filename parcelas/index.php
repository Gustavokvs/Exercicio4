<?php require_once 'parcelasEJuros.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculadora Financeira</title>
</head>

<body>
    <h2>Calculadora de Parcelamento com Juros</h2>

    <form method="post">
        <label>Valor da Compra (R$): <input type="number" name="valorCompra" step="0.01" required></label><br><br>
        <label>Número de Parcelas: <input type="number" name="numeroParcelas" required></label><br><br>
        <label>Taxa de Juros Mensal (%): <input type="number" name="taxa" step="0.01" required></label><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $parcela = new Parcela();
        $parcela->setValorCompra((float) $_POST['valorCompra'])
            ->setNumeroParcelas((int) $_POST['numeroParcelas'])
            ->setTaxaDeJurosMensalPercentagem((float) $_POST['taxa']);

        echo "<h3>Resultado do Cálculo:</h3>";
        echo "<p><strong>Valor da Compra:</strong> R$ " . number_format($parcela->getValorCompra(), 2, ',', '.') . "</p>";
        echo "<p><strong>Número de Parcelas:</strong> " . $parcela->getNumeroParcelas() . "</p>";
        echo "<p><strong>Taxa de Juros Mensal:</strong> " . $parcela->getTaxaDeJurosMensalPercentagem() . " %</p>";
        echo "<p><strong>Valor dos Juros no 1º mês:</strong> R$ " . number_format($parcela->calcularJurosMensal(), 2, ',', '.') . "</p>";
        echo "<p><strong>Valor de cada Parcela:</strong> R$ " . number_format($parcela->calcularParcelasComJuros(), 2, ',', '.') . "</p>";
        echo "<p><strong>Total a Pagar:</strong> R$ " . number_format($parcela->calcularTotalAPagar(), 2, ',', '.') . "</p>";
        echo "<p><strong>Juros Totais Pagos:</strong> R$ " . number_format($parcela->calcularJurosTotais(), 2, ',', '.') . "</p>";
    }
    ?>
</body>

</html>