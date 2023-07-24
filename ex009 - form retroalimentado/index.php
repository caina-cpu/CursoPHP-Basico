<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $n1 = $_GET["v1"] ?? 0;
    $n2 = $_GET["v2"] ?? 0;
    $soma = $n1 + $n2;

    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $n1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $n2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?= "<p>O resultado da soma dos valores $n1 e $n2 é igual a <strong>$soma</strong>.</p>" ?>
    </section>
</body>

</html>