<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET["v1"] ?? 0;
        $salMin = 1320;
        $salReal = intdiv($salario, $salMin);
        $resto = $salario % $salMin;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Salário (R$)</label>
            <input type="number" name="v1" id="v1" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$1.320,00</strong>.</p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>
        <?= "<p>Quem recebe um salário de R\$ " . number_format($salario, 2, ",", ".") . " ganha <strong>$salReal salários mínimos + R\$ ". number_format($resto, 2, ",", ".") ."</strong>.</p>";?>
    </section>
</body>
</html>