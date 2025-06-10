<?php require_once 'Estoque.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Controle de Estoque</title>
</head>

<body>
    <h2>Controle de Estoque</h2>

    <form method="post" style="margin-top: 20px;">
        <label>Quantidade saída: <input type="number" name="saidaEstoque" required></label><br><br>
        <button type="submit" name="acao" value="saida">Dar Saída</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['saidaEstoque'])) {
        // Conversão de tipos para evitar erro de tipagem
        session_start();
        $est = unserialize($_SESSION['estoque']);

        $est->setSaidaEstoque($_POST['saidaEstoque']);

        //  $est = new Estoque();
        /*    nomeProduto: $nomeProduto,
            quantidadeEstoque: $quantidadeEstoque,
            valorUnitario: $valorUnitario,
            entradaEstoque: 0,
            saidaEstoque: $saidaEstoque
        );*/

        echo "<h3>Estoque Atual</h3>";
        $est->darSaidaEstoque($est->getSaidaEstoque());
        //  echo $est->consultarEstoque();
    }
    ?>
    <a href="./entrada.php">Teste</a>
    <a href="./saida.php">Saida</a>
</body>

</html>