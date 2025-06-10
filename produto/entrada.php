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

    <form method="post">
        <label>Nome do Produto: <input type="text" name="nomeProduto" required></label><br><br>
        <label>Quantidade entrada: <input type="number" name="entradaEstoque" required></label><br><br>
        <label>Valor unitário: <input type="number" step="0.01" name="valorUnitario" required></label><br><br>
        <button type="submit" name="acao" value="entrada">Dar Entrada</button>
    </form>


    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //$est = new Estoque();
session_start();
$est = unserialize($_SESSION['estoque']);
        /* nomeProduto: $_POST['nomeProduto'],
         entradaEstoque: $_POST['entradaEstoque'] ?? 0,
         saidaEstoque: $_POST['saidaEstoque'] ?? 0,
         valorUnitario: $_POST['valorUnitario'],
         quantidadeEstoque: $_POST['quantidadeEstoque'] ?? 0,
     );*/
        $nomeProduto = $_POST['nomeProduto'];
        $entrada = $_POST['entradaEstoque'];
        $valorUnitario = $_POST['valorUnitario'];


        $est->setNomeProduto($nomeProduto);
        $est->setEntradaEstoque($entrada);
        $est->setValorUnitario($valorUnitario);
        $est->setQuantidadeEstoque(0);


        echo "<h3>Estoque Atual</h3>";
        $est->darEntradaEstoque($est->getEntradaEstoque());
        echo $est->consultarEstoque();
        // Depois de chamar $est->darEntradaEstoque(...)
    
        // $nomeProduto = urlencode($_POST['nomeProduto']);
        // $valorUnitario = (float) $_POST['valorUnitario'];
        // $quantidadeEstoque = (int) $_POST['entradaEstoque']; // usar entrada como estoque inicial
    
    }

    ?>
<a href="./entrada.php">Teste</a>
<a href="./saida.php">Saida</a>
</body>

</html>