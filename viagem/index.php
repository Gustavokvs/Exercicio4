<?php require_once 'Viagem.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Planejamento de Viagem</title>
</head>

<body>
    <h2>Calculadora de Viagem</h2>
    <form method="post">
        <label>Origem: <input type="text" name="origem" required></label><br><br>
        <label>Destino: <input type="text" name="destino" required></label><br><br>
        <label>Distância (em km): <input type="number" name="distancia" step="0.1" required></label><br><br>
        <label>Tempo estimado (em horas): <input type="number" name="estimado" step="0.1" required></label><br><br>
        <label>Tipo de veículo: <input type="text" name="tipoVeiculo" required></label><br><br>
        <label>Consumo do veículo (km por litro): <input type="number" name="consumo" step="0.1" required></label><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $viagem = new Viagem();
        $viagem->setOrigem($_POST['origem'])
            ->setDestino($_POST['destino'])
            ->setDistancia((float) $_POST['distancia'])
            ->setEstimado((float) $_POST['estimado'])
            ->setTipoVeiculo($_POST['tipoVeiculo'])
            ->setConsumo((float) $_POST['consumo']);

        echo "<h3>Resultado da Viagem:</h3>";
        echo "<p><strong>Origem:</strong> " . $viagem->getOrigem() . "</p>";
        echo "<p><strong>Destino:</strong> " . $viagem->getDestino() . "</p>";
        echo "<p><strong>Distância:</strong> " . $viagem->getDistancia() . " km</p>";
        echo "<p><strong>Tempo estimado:</strong> " . $viagem->getEstimado() . " horas</p>";
        echo "<p><strong>Velocidade média:</strong> " . $viagem->calcularVelocidade() . "</p>";
        echo "<p><strong>Consumo estimado:</strong> " . $viagem->calcularConsumoEstimado() . "</p>";
        echo "<p><strong>Custo estimado:</strong> " . $viagem->calcularCustoViagem() . "</p>";
    }
    ?>
</body>

</html>