<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo idade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $n1 = $_GET["v1"] ?? 0;
    $n2 = $_GET["v2"] ?? $data;
    $data = date("Y");
    $res = $n2 - $n1;

    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Em que ano você nasceu?</label>
            <input type="number" name="v1" id="v1" min="1900" max="<?= $data - 1 ?>" value="<?= $n1 ?>">
            <label for="v2">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= $data ?></strong>)</label>
            <input type="number" name="v2" id="v2" value="<?= $data ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $n1 ?> vai ter <?= "<strong>$res anos</strong>" ?> em <?= $n2?>.</p>
    </section>
</body>

</html>