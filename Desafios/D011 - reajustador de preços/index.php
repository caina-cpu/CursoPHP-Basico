<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $n1 = $_GET["v1"] ?? 0;
    $n2 = $_GET["v2"] ?? 0;
    $res = ($n1 * $n2) / 100;
    $res2 = $n1 + $res;

    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Preço do produto</label>
            <input type="number" name="v1" id="v1" value="<?= $n1 ?>" step="0.01">
            <label for="v2">Porcentagem de reajuste <strong><span id="p">(?)</span>%</strong></label>
            <input type="range" name="v2" id="v2" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$n2?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado do reajuste</h2>
        <?= "<p>O pruduto que custava R\$" . number_format($n1, 2, ",", '.') .", com <strong>$n2% de aumento</strong> vai passar a custar <strong>R\$". number_format($res2, 2, ",", ".") ."</strong> a partir de agora.</p>" ?>
    </section>
    <script>
        mudaValor()

        function mudaValor() {
            p.innerText = v2.value;
        }
    </script>
</body>

</html>