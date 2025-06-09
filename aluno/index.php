<?php require_once 'aluno.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aluno</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    <h2>Informações do aluno</h2>

    <form method="post">
        <label>Nome: <input type="text" name="nome" required></label><br><br>
        <label>Disciplina: <input type="text" name="disciplina" required></label>
        <label>Nota 1: <input type="text" name="nota1" required></label>
        <label>Nota 2: <input type="text" name="nota2" required></label>
        <label>Nota 3: <input type="text" name="nota3" required></label>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $alun = new Aluno(
            nome: $_POST['nome'],
            disciplina: $_POST['disciplina'],
            nota1: $_POST['nota1'],
            nota2: $_POST['nota2'],
            nota3: $_POST['nota3']
        );
        $alun->calcularMedia();
        echo "<h3>Resultado</h3>";
        echo $alun->setResultado();
    }

    ?>
</body>

</html>