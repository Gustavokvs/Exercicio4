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
    session_start();
    /* SESSION É UMA VARIAVEL GLOBAL, QUE GUARDA OS DADOS DE UMA PÁGINA PARA OUTRA*/

    $est = unserialize($_SESSION['estoque']);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nomeProduto = $_POST['nomeProduto'];
        $entrada = $_POST['entradaEstoque'];
        $valorUnitario = $_POST['valorUnitario'];


        $est->setNomeProduto($nomeProduto);
        $est->setEntradaEstoque($entrada);
        $est->setValorUnitario($valorUnitario);
        $est->setNomeEstoque($entrada);

        echo "<h3>Estoque Atual</h3>";
        $est->darEntradaEstoque($est->getEntradaEstoque());
        echo $est->consultarEstoque();
        $_SESSION['estoque'] = serialize($est);



    }

    ?>
    <a href="./entrada.php">Entrada</a>
    <a href="./saida.php">Saida</a>
</body>

</html>