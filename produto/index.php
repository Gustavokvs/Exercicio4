<?php require_once 'Estoque.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
</head>
<body>

<a href="./entrada.php">Teste</a>
<a href="./saida.php">Saida</a>
    <?php
    session_start();
   
    
    $est = new Estoque();
    $_SESSION['estoque'] = serialize($est);
    
    ?>
</body>
</html>