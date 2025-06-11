<?php require_once 'hospedagem.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Hotel</title>
</head>

<body>
    <h2>Hospedagem</h2>

    <form method="post">
        <label>Nome: <input type="text" name="nome" step="0.01" required></label><br><br>
        <label>Número de noites: <input type="number" name="numeroNoites" required></label><br><br>
        <label>Tipo de quarto: <input type="string" name="tipoQuarto" step="0.01" required></label><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $hot = new Hotel();
        $hot->setNoites((int) $_POST['numeroNoites']);
        $hot->setTipoQuarto((string) $_POST['tipoQuarto']); 
        $hot->setNome((string) $_POST['nome']);

        $hot->calcularTotalHospedagem();
        echo $hot->fazerAtendimento();
    }
    ?>
</body>

</html>