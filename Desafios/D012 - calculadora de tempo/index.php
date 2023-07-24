<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $n1 = $_GET["v1"] ?? 0;
    $sem = intdiv($n1, 604800);
    $dia = intdiv(($n1 % 604800), 86400);
    $hora = intdiv(($n1 % 86400), 3600);
    $min = intdiv(($n1 % 3600), 60);
    $seg = $n1 % 60;

    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Qual é o total de segundos?</label>
            <input type="number" name="v1" id="v1" value="<?= $n1 ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            echo "<p>Analisando o valor que você digitou (<strong>" . number_format($n1, 0, ",", ".") . " segundos</strong>), isso equivale a um total de:</p>";
            echo "<ul><li>$sem Semanas</li>";
            echo "<li>$dia Dias</li>";
            echo "<li>$hora Horas</li>";
            echo "<li>$min Minutos</li>";
            echo "<li>$seg Segundos</li></ul>";
        ?>
    </section>
</body>

</html>